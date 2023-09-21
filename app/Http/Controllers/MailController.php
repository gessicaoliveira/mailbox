<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail() {

        $name = 'Gessica';
        Mail::to('fake@mail.com')->send(new SignUp($name));

        return view('welcome');

    }
}
