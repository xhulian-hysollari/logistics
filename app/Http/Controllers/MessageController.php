<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $user = Sentinel::getUser();
        foreach ($user->conversations() as $conversation){
            dd('first \n' . $conversation->id);
        }

        dd($user->conversations());
//        return response($user->conversations(), 200);
    }
}
