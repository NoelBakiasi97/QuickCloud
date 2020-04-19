<?php

namespace App\Http\Controllers;

use App\Newsletter;
use App\Mail\NewsletterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{


    public function __construct(){
        $this->middleware('admin')->only('index');
    }
    
    
    public function index()
    {
        $newsletter = Newsletter::all();
        return view('backoffice.newsletter.newsletterIndex', compact('newsletter'));
    }

   
    public function store(Request $request)
    {
        $newsletter = new Newsletter();
        $newsletter->email=$request->email;
        $newsletter->save();
        Mail::to($newsletter->email)->send(new NewsletterMail($newsletter->email)); 
        return redirect()->back();
    }

}
