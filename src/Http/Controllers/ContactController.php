<?php
namespace Masud99Rana\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        return $request->all();
    }
 }