<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    // Home
    public function index_home(){
        return view('@public.home.index');
    }

    // About
    public function index_about(){
        return view('@public.about.index');
    }

    // Contact
    public function index_contact(){
        return view('@public.contact.index');
    }
}
