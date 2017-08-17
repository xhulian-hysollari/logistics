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
        try{
            $email = Input::get('email');
            if($this->autobot->where('email', $email)->exists()){
                $user = $this->autobot->where('email', $email)->first();
                if ($activation = Activation::exists($user)) {
                    Mail::send('emails.reminder', ['user' => $user, 'activation' => $activation], function ($m) use ($user) {
                        $m->from('customer@maxlogistics.eu', 'Max Logistics');
                        $m->to($user->email, $user->full_name)->subject('Your Activation Code!');
                    });
                    return redirect()->back()->with('success','Email Sent');
                }
                $activation = Activation::create($user);
                Mail::send('emails.reminder', ['user' => $user, 'activation' => $activation], function ($m) use ($user) {
                    $m->from('customer@maxlogistics.eu', 'Max Logistics');
                    $m->to($user->email, $user->full_name)->subject('Your Activation Code!');
                });
                return redirect()->back()->with('success','Email Sent');
            }
            return redirect()->back()->with('error','Not Exists');
        }catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function activate($id, $code)
    {
        try{
            $user = $this->autobot->findOrFail($id);
            if(Activation::completed($user)){
                return redirect()->route('home')->with('info', 'You have already activated your account.');
            }
            if(!Activation::exists($user)){
                return redirect()->route('home')->with('warning', 'It appears that your activation link has expired. Please request a new activation link or contact customer support.');
            }
            if (!Activation::complete($user, $code)) {
                return redirect()->route('home')->with('error', 'There was an error while trying to activate your account. Please try again or contact customer support.');
            }
            $this->transformer->login($user);
            return redirect()->route('profile')->with('success', 'Your account has been activated. Please complete your profile before using our platform.');

        }catch(\Exception $ex){
            return redirect()->route('home')->with('error', $ex->getMessage());
        }

    }
}
