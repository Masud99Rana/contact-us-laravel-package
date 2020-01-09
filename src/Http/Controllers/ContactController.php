<?php
namespace Masud99Rana\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Masud99Rana\Contact\Mail\ContactMailable;
use Masud99Rana\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Contact::create($request->all());
        
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));

        session()->flash('message', 'You query was submitted successful!');

        return redirect(route('contact'));
    }
 }