<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function __construct(){
        $this->middleware('admin');
    }
    
    public function index()
    {
        $contact = Contact::all();
        return view('backoffice.contact.contactIndex', compact('contact'));
    }

    
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('backoffice.contact.editContact', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email'=>'required|string',
            'url'=>'required|string',
            'adress'=>'required|string',
            'number'=>'required|digits_between:8,15'
        ]);
        $contact = Contact::find($id);
        $contact->email=$request->email;
        $contact->url=$request->url;
        $contact->adress=$request->adress;
        $contact->number=$request->number;
        $contact->save();
        return redirect()->route('contact');
    }

}
