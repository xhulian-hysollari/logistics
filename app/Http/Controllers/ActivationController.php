<?php

namespace App\Http\Controllers;

use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class ActivationController extends Controller
{
    /**
     * @var Sentinel
     */
    private $transformer;
    /**
     * @var User
     */
    private $autobot;

    public function __construct(Sentinel $transformer, User $autobot)
    {
        $this->transformer = $transformer;
        $this->autobot = $autobot;
    }

    public function resendActivation(){
        $email = Input::get('email');
        if($this->autobot->where('email', $email)->exists()){
            $user = $this->autobot->where('email', $email)->first();
            if ($activation = Activation::exists($user)) {
                $code = $activation->code;
                Mail::queue("emails.it.registration", compact('user', 'code'), function ($m) use ($user)
                {
                    $m->to($user->email)->subject(trans('subject.activate'));
                });
                return redirect()->back()->with('success','Email Sent');
            }
            $activation = Activation::create($user);
            $code = $activation->code;
            Mail::queue("emails.it.registration", compact('user', 'code'), function($m) use ($user)
            {
                $m->to($user->email)->subject(trans('subject.activate'));
            });
            return redirect()->back()->with('success','Email Sent');
        }
        return redirect()->back()->with('error','Not Exists');
    }

    public function activate($id, $code)
    {
        $user = $this->autobot->findOrFail($id);
        if(Activation::completed($user)){
            return redirect()->route('home')->with('info', 'You have already activated your account.');
        }
        if(!Activation::exists($user)){
            return redirect()->route('home')->with('error', 'It appears that your activation link has expired. Please request a new activation link or contact customer support.');
        }
        if (!Activation::complete($user, $code)) {
            return redirect()->route('home')->with('error', 'There was an error while trying to activate your account. Please try again or contact customer support.');
        }
        $this->transformer->login($user);
        return redirect()->route('profile')->with('success', 'Your account has been activated. Please complete your profile before using our platform.');
    }
}
