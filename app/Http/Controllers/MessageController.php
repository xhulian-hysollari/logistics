<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $user = Sentinel::getUser();
        return response($user->conversations(), 200);
    }
}
