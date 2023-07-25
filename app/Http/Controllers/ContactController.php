<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function store(Request $request){
       $validated =  $request->validate([
            'title' => 'required',
            'email' => 'required'
        ]);

        Contact::create($validated);


        return back()->with('success','Contact Created');
    }
}
