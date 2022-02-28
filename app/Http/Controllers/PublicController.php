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

    // For Parents
    public function index_for_parent(){
        return view('@public.for_parent.index');
    }

    // For Professional
    public function index_for_professional(){
        return view('@public.for_professional.index');
    }

    // For Organization
    public function index_for_organization(){
        return view('@public.for_organization.index');
    }

    // For Resource
    public function index_resource(){
        return view('@public.resource.index');
    }

    // Contact
    public function index_contact(){
        return view('@public.contact.index');
    }
}
