<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Sentinel;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    private $user;

    function __construct(Sentinel $user)
    {
        $this->user = $user;
    }

    public function login()
    {
        $username = Input::get('email');
        $password = Input::get('password');
//        $remember_me = Input::get('remember_me');
        $result = null;
//        try {
        $user = $this->user->authenticate([
            'email' => $username,
            'password' => $password
        ]);

        if ($user) {
            $result = $this->user->login($user);
        }

        if ($result) {
            return redirect()->to('/');
        }

        return redirect()->route('login')->with('error', 'Wrong Credentials');
    }

    public function logout()
    {
        $user = \Cartalyst\Sentinel\Laravel\Facades\Sentinel::getUser();
        $this->user->logout($user);
        return redirect()->route('home');
    }
}
