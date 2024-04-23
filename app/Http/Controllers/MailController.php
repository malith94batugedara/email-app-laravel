<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'title'=>'Mail from Malith',
            'body'=>'This is testing mail'
        ];
        Mail::to("malithbatugedara@gmail.com")->send(new TestMail($details));

        return "Email Sent";
    }
}
