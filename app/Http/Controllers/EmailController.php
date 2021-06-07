<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

class EmailController extends Controller
{
    function send(Request $request){
        // return "hello";
        $data = array(
            'subject' => $request->subject,
            'body' => $request->body
        );
        $to = $request->to;
        // dd($data);

        Mail::to($to)->send(new Email($data));

        return "successful";
    }
}
