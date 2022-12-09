<?php

namespace App\Http\Controllers;

use App\Jobs\MailJob;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data['name']=$request->input('name');
        $data['email']=$request->input('email');
        $data['subject']=$request->input('subject');
        $data['message']=$request->input('message');

        $send_email = new MailJob($data);
        dispatch($send_email);
        // Mail::to('victorazangu@gmail.com')->send(new Contact($data));




        return redirect(route('contact.index'))->with('status', "Thank you, we'll be in touch soon");
    }
}
