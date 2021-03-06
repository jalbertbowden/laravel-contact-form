<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Admin;



class ContactController extends Controller
{
    public function show(){
    	return view('contact');
    }

    public function mailToAdmin(ContactFormRequest $message, Admin $admin){
    	// send admin notification
    	$admin->notify(new InboxMessage($message));
    	// redirect user back
    	return redirect()->back()->with('message', 'thanks for the message! We will get back to you soon!');
    }
}
