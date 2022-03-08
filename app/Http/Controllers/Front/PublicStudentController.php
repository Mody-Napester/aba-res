<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PublicStudentController extends Controller
{
    // Get Profile
    public function profile(){
        $data['student'] = Student::where('user_id', auth()->user()->id)->first();
        if(!$data['student']){
           return redirect(route('public.home.index'));
        }

        return view('@public.student.info', $data);
    }

    // Get Courses
    public function courses(){
        $data['student'] = Student::where('user_id', auth()->user()->id)->first();
        if(!$data['student']){
            return redirect(route('public.home.index'));
        }

        return view('@public.student.courses', $data);
    }

    // Get certificates
    public function certificates(){
        $data['student'] = Student::where('user_id', auth()->user()->id)->first();
        if(!$data['student']){
            return redirect(route('public.home.index'));
        }

        return view('@public.student.certificates', $data);
    }

    // Get quizzes
    public function quizzes(){
        $data['student'] = Student::where('user_id', auth()->user()->id)->first();
        if(!$data['student']){
            return redirect(route('public.home.index'));
        }

        return view('@public.student.quizzes', $data);
    }

    // Get orders
    public function orders(){
        $data['student'] = Student::where('user_id', auth()->user()->id)->first();
        if(!$data['student']){
            return redirect(route('public.home.index'));
        }

        return view('@public.student.orders', $data);
    }
}
