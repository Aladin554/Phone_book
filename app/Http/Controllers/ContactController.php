<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function Contact(){
        $contacts=Contact::latest();
        return view('contact',compact('contacts'));
    }


    public function ContactStore(Request $request) {
        
		Contact::insert([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,

        ]);
        return redirect()->route('contact');
    }
}