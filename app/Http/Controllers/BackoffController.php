<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackoffController extends Controller
{
    public function index(){
        return view('backoffice.backoffice');
    }
}
