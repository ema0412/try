<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
     {
          return view('index');
     }

    public function confirm(Request $request)
     {
        $contact=$request->only(['name','email','tel','content']);
        return view('confirm',['contact'=> $contact]);
     }

     public function store(Request $request)
     {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);
        return view('thanks');
     }

     public function register()
     {
        return view('register');
     }

     public function login(Request $request)
     {
        $contact = $request->only(['email','password','content']);
        return view('login',['content'=>$contact]);
     }

     public function admin(Request $request)
     {
        $contact= $request->only(['name','email','tel','content']);
        Contact::create($contact);
        return view('admin');
     }

}
