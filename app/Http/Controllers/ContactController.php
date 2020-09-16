<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
     public function index()
    {
       return view('contact');
    }
    public function contactform()
    {
    $data = request()->validate([
            'fullname' => 'required',
            'user_email' => 'email|min:7',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        // UserContact::create($data);
        
        return redirect('contact')->with('message', 
        'Thanks for making enquires, we will reach you shortly');
    }
}
