<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $user = Sentinel::getUser();
        foreach ($user->conversations() as $conversation){
            dd($conversation->id);
        }

        dd('2nd \n' . $user->conversations());
//        return response($user->conversations(), 200);
    }
}
