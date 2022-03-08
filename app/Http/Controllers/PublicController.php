<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    // index_cart
    public function index_cart(){
        return view('@public.cart.index');
    }

    // index_consultation_for_parent
    public function index_consultation_for_parent(){
        return view('@public.consultation.index_for_parent');
    }

    // index_consultation_for_professional
    public function index_consultation_for_professional(){
        return view('@public.consultation.index_for_professional');
    }

    // index_consultation_for_organization
    public function index_consultation_for_organization(){
        return view('@public.consultation.index_for_organization');
    }

    // index_course
    public function index_course(){
        return view('@public.course.index');
    }

    // show_course
    public function show_course(){
        return view('@public.course.show');
    }

    // index_book
    public function index_book(){
        return view('@public.course.book');
    }

    // show_book
    public function show_book(){
        return view('@public.book.show');
    }

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
