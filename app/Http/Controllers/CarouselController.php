<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Carousel;

class CarouselController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function index(){
        $carousel = Carousel::all();
        return view('backoffice.carousel.carouselIndex', compact('carousel'));
    }
    
    public function edit($id){
        $carousel = Carousel::find($id);
        return view('backoffice.carousel.editCarousel', compact('carousel'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title'=>'required|string',
            'text'=>'required|string',
            'img'=>'sometimes|image'
        ]);
        $carousel = Carousel::find($id);
        $carousel->title=$request->input('title');
        $carousel->text=$request->input('text');
        if($request->hasFile('img')){
            Storage::disk('public')->delete($carousel->img);
            $newImg=Storage::disk('public')->put('', $request->img);
            $carousel->img=$newImg;
        }
        $carousel->save();
        return redirect()->route('carousel');
    }
}
