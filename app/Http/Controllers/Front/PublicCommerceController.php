<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PublicCommerceController extends Controller
{
    // Get Profile
    public function courses(){
        return view('@public.profile.courses');
    }
}
