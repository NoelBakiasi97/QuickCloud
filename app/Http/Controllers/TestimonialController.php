<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }


    public function index()
    {
        $testimonials = Testimonial::all();
        return view('backoffice.testimonials.testimonialsIndex', compact('testimonials'));
    }

    
    public function create()
    {
        $testimonials = Testimonial::all();
        return view('backoffice.testimonials.addTestimonials', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string',
            'comment'=>'required|string',
            'img'=>'sometimes|image',
            'name'=>'required|string',
        ]);
        $testimonials = new Testimonial();
        $testimonials->title=$request->title;
        $testimonials->comment=$request->comment;
        $newImg=Storage::disk('public')->put('', $request->img);
        $testimonials->img=$newImg;
        $testimonials->name=$request->name;
        $testimonials->save();
        return redirect()->route('testimonials');
    }

    

    public function destroy($id)
    {
        $testimonials = Testimonial::find($id);
        $testimonials->delete();
        return redirect()->route('testimonials');
    }
}
