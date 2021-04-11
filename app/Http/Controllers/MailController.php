<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;


class MailController extends Controller
{
    public function sendEmail(){
        $details = [
        //     'title' => 'Mail from Student Service Center',
        //     'body' => 'This for testing mail using gmail.'
            'title' => 'Mail from Robert Lewandowski',
            'body' => 'Hello Medet, Нou can come to the stadium.'
        
        ];

        Mail::to("nargizakurganbaeva@gmail.com")->send(new TestMail($details));
        return "Email Sent";
    }
}
