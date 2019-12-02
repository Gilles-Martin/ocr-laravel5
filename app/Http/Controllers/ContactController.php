<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use function view;

class ContactController extends Controller
{

    public function getForm()
    {
        return view('contact_form');
    }

    public function postForm(ContactRequest $request)
    {
        
        Mail::send('contact_email', $request->all(), function($message) {
            $message->to('gilles.martin@j2c-communication.fr')->subject('Contact Laravel');
        });

        return view('contact_confirm');
    }

}
