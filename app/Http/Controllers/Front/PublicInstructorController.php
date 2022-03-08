<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PublicInstructorController extends Controller
{
    // show
    public function show($uuid){
        $data['instructor'] = Instructor::where('is_active', 1)->where('uuid', $uuid)->first();

        if($data['instructor']){
            return view('@public.instructor.show', $data);
        }else{
            return redirect(route('public.home.index'));
        }
    }
}
