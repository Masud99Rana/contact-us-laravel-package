<?php
namespace Masud99Rana\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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

        session()->flash('message', 'You query was submitted successful!');

        return redirect(route('contact'));
    }
 }