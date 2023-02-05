<?php

namespace Robert\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Robert\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Robert\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    //
    public function index()
    {

        return view('contact::contact');
    }
    public function send(Request $request)
    {
        Mail::to(config('contact.send_to_email'))->send(new ContactMailable($request->message));
        Contact::create($request->all());
        return redirect()->back();
    }
}
