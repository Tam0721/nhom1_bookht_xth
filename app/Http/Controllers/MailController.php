<?php

namespace App\Http\Controllers;

use App\Mail\CancelRoom;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    function sendMail(){
        $userMail = User::orderBy("id_user","desc")->limit(1)->get('email');
        Mail::to($userMail)->send(new CancelRoom());
        return redirect()->route('ls');
    }

}
