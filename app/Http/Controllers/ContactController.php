<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function sendMessage(ContactRequest $request) {
        dd($request->validated());
    }
}
