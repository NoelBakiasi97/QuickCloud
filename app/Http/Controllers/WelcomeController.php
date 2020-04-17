<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;

class WelcomeController extends Controller
{
    public function index(){
        $carousel = Carousel::all();
        return view ('welcome', compact('carousel'));
    }
}
