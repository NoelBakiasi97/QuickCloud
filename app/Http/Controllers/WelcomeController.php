<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Histoire;
use App\Testimonial;
use App\Contact;

class WelcomeController extends Controller
{
    public function index(){
        $carousel = Carousel::all();
        $history = Histoire::orderBy('year', 'asc')->get();
        $testimonials = Testimonial::all();
        $contact = Contact::all();
        return view ('welcome', compact('carousel', 'history', 'testimonials', 'contact'));
    }
}
