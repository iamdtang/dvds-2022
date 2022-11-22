<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function processForm()
    {
        Mail::raw(request('message'), function ($message) {
            $message->to('dtang@usc.edu')->subject('Contact Form Submission');
        });

        return redirect('/contact');
    }
}
