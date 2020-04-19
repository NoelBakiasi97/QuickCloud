<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain;

class DomainController extends Controller
{
    public function search(Request $request){
        $domain = Domain::all();
        $exist = false;
        if (!Domain::where('name', 'LIKE' , $request->name)->where('extension', 'LIKE', $request->ext)->exists()) {
            return redirect('/#domain')->with('msg', "Ce nom n'a pas encore été enregistré.");
        }
        return redirect('/#domain')->with('msg', 'Ce nom de domaine existe déja !');
    }
}
