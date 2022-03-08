<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PublicAuthController extends Controller
{
    // Show Auth
    public function auth(){
        return view('@public.auth.show');
    }

    // Post Login
    public function login(Request $request){

        // Validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if(auth()->attempt($credentials)){
            return redirect(route('public.student.profile'));
        }else{
            return redirect(route('public.home.index'));
        }

    }

    // Post Register
    public function register(Request $request){

        // Validation
        $request->validate([
            'display_name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->display_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            $student = Student::store([
                'first_name' => ($request->has("first_name")) ? $request->display_name : '',
                'last_name' => '',
                'display_name' => ($request->has("display_name")) ? $request->display_name : '',
                'email' => ($request->has("email")) ? $request->email : '',
                'phone' => '',
                'info' => '',
                'social_facebook_url' => '',
                'social_twitter_url' => '',
                'social_linkedin_url' => '',
                'social_youtube_url' => '',
                'user_id' => $user->id,
                'is_active' => 1,
                'created_by' => $user->id,
            ]);
        }else{
            return back()->with('message', "Cannot Be Created");
        }

        auth()->login($user);

        return redirect(route('public.student.profile'));
    }
}
