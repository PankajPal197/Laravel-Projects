<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
Use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index(){
        $mailData=[
            'title'=>"Mail From Palshab197",
            'body'=>"This is Demo Email is using smtp in Laravel"
        ];
        Mail::to('pankajp@beelabs.technology')->send(new DemoMail($mailData));
        dd('Email Send Successfully');
    }
}
