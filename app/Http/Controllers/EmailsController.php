<?php


namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use App\Http\Requests;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class EmailsController extends Controller
{
    public function sendEmail(Request $request)
    {
        // $contact_name = $request->name;
        $contact_email = $request->email;
        // $content = $request->content;
        
        $data = array(
            'contact_name' =>$request->name,
            'content' => $request->content
        );

        Mail::send('emailMe', $data, function ($m) use ($contact_email) {
    
            $m->from('brendamrl816@gmail.com', 'PORTFOLIO');
            $m->to('brendamrl816@gmail.com')->subject('Contact From Portfolio Website');
            $m->replyTo($contact_email);
        });
        
        return redirect('/#contact')->with('status', 'Your email has been sent.');
    }
    
}
