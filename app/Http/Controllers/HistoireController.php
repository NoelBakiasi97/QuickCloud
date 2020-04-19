<?php

namespace App\Http\Controllers;

use App\Histoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HistoireController extends Controller
{

    public function __construct(){
        $this->middleware('admin');
    }
    
    public function index()
    {
        $history = Histoire::orderBy('year', 'asc')->get();
        return view('backoffice.history.historyIndex', compact('history'));
    }

    
    public function create()
    {
        $history = Histoire::all();
        return view('backoffice.history.addHistory', compact('history'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'img'=>'sometimes|image',
            'year'=>'required|digits:4',
            'text'=>'required|string',
        ]);
        $history = new Histoire();
        $newImg=Storage::disk('public')->put('', $request->img);
        $history->img=$newImg;
        $history->year=$request->year;
        $history->text=$request->text;
        $history->save();
        return redirect()->route('history');
    }

    
    public function edit($id)
    {
        $history = Histoire::find($id);
        return view('backoffice.history.editHistory', compact('history'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'img'=>'sometimes|image',
            'year'=>'required|digits:4',
            'text'=>'required|string',
        ]);
        $history = Histoire::find($id);
        if($request->hasFile('img')){
            Storage::disk('public')->delete($history->img);
            $newImg=Storage::disk('public')->put('', $request->img);
            $history->img=$newImg;
        }
        $history->year=$request->year;
        $history->text=$request->text;
        $history->save();
        return redirect()->route('history');
    }

    
    public function destroy($id)
    {
        $history = Histoire::find($id);
        Storage::disk('public')->delete($history->img);
        $history->delete();
        return redirect()->route('history');
    }
}
