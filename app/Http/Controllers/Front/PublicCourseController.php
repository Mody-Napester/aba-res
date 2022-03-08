<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PublicCourseController extends Controller
{
    // index
    public function index(){
        $data['courses'] = Course::where('is_published', 1)->get();
        return view('@public.profile.courses', $data);
    }

    // show
    public function show($uuid){
        $data['course'] = Course::where('is_published', 1)->where('uuid', $uuid)->first();

        if($data['course']){
            return view('@public.course.show', $data);
        }else{
            return redirect(route('public.home.index'));
        }
    }
}
