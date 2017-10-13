<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        $input = Input::all();

        Mail::send('emails.contacts', ['input' => $input], function ($m) {
            $m->from('customer@maxlogistics.eu', 'Max Logistics');
            $m->to('kris@maxlogistics.eu')->subject('Contact Us Request');

        });
        return redirect()->back()->with('success','Thank you for contacting us. One of our representatives will reach back to you.');
    }
}
