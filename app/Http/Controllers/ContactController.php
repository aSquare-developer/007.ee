<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage(ContactRequest $request) {
        // Validate form fields
        $request->validated();

        // Make Data for email
        $mailData = [
            'email' => $request->email,
            'message' => $request->message
        ];

        // Send mail
        Mail::to('anissimov9393@gmail.com')->send(new ContactMail($mailData));
        
        return redirect()->back();
    }
}
