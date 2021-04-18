<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\AdEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send() {
        $user = new User();

        $obj = new \stdClass();
        $obj->sender = 'temirgaliomar@gmail.com';
        $obj->receiver = auth()->user()->email;

        Mail::to(auth()->user()->email)->send(new AdEmail($obj));

        return redirect('/contact');
    }
}
