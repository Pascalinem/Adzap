<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationNotificationMail;
use Illuminate\Support\Facades\Auth;


class MailController extends Controller


{
    public function index()
    {

        $user= Auth::user(); 

     Mail::to($user->email)->send(new RegistrationNotificationMail($user));

    }

}