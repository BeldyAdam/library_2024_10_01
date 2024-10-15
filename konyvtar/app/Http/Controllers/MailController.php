<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
   {
       $mailData = [
           'title' => 'Levél címe',
           'body' => 'Levél törzse'
       ];       
       Mail::to('adam.beldy.business@gmail.com')
    ->send(new DemoMail($mailData));
       dd("Email küldése sikeres.");
   }

}
