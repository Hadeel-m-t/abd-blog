<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact() {

        return view ('emails.contact-me');
    }

    public function sendEmail(Request $request) {

        $details = [
            'name' => $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'msg'=> $request->msg
        ];

        Mail::to('hdlno@hotmail.com')->send(new ContactMail($details));

        return back()->with('message-sent', 'Your message has been sent successfuly, We will reply to you as soon as possible. Thank you !');
    }
}
