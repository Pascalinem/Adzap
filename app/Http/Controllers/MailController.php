<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationNotificationMail;

class MailController extends Controller
{
    public function index()
    {

       
     Mail::to('your_email@gmail.com')->send(new RegistrationNotificationMail());
    }

}