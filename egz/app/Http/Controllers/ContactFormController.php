<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create(){
        return view('contactForm.contactus');
    }

    public function store(){

        $data = request() -> validate([
            'name'  =>  'required',
            'email'  =>  'required | email',
            'subject'  =>  'required',
            'message'  =>  'required',
        ]);

        // Mail::to('sujaytank@gmail.com')->send(new ContactFormMail($data));
        // return redirect('contact')->with('message','Thank you, We\'ll be in touch.');

        Mail::to('sujaytank16595@gmail.com')->send(new ContactFormMail($data));
        return redirect('contact')->with('message','Thank you for your message.');


        // return view('emails.contactForm.thankyou')->with('message','Thank you for your message.');

       // dd(request() -> all());
    }
}
