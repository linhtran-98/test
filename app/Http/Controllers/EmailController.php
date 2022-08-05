<?php

namespace App\Http\Controllers;

use App\Mail\HelloEmail;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $subject = 'This is email subject';
        $content = 'This is email content';

        $reveiverEmailAddress = "conchomuc1998@gmail.com";
        // for ($i=0; $i < 5; $i++) { 
            Mail::to($reveiverEmailAddress)->send(new HelloEmail($subject, $content));
        // }
        // Mail::to($reveiverEmailAddress)->send(new OrderShipped());

        if (Mail::failures() != 0) {
            return "Email has been sent successfully.";
        }
        return "Oops! There was some error sending the email.";
    }
}
