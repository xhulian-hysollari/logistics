<?php

namespace App\Http\Controllers;

use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    private $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

    public function register()
    {
        try {
            $full_name = Input::get('full_name');
            $email = Input::get('email');
            $password = Input::get('password');
            $company_logo = Input::file('company_logo');
            $validator = Validator::make(Input::all(), [
                'email' => 'email|required|unique:users',
                'password' => 'required',
                'confirm_password' => 'required|same:password',
                'full_name' => 'required',
                'company_logo' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput()->with('error', $validator->getMessageBag()->toArray());
            }

            $logo = $company_logo->store('clogos');
            $user = $this->user->create([
                'full_name' => $full_name,
                'email' => $email,
                'company_logo' => $logo,
                'password' => bcrypt($password)
            ]);
            $this->attachUserRole($user, 'user');
            $activation = Activation::create($user);

            Mail::send('emails.reminder', ['user' => $user, 'activation' => $activation], function ($m) use ($user) {
                $m->from('customer@maxlogistics.eu', 'Max Logistics');
                $m->to($user->email, $user->full_name)->subject('Activate your account');
            });
            return redirect()->route('home')->with('success', trans('register.success'));
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    private function attachUserRole($user, $slug)
    {
        $role = Sentinel::findRoleBySlug($slug);
        if (!$role){
            $role = Sentinel::getRoleRepository()->createModel()->create([
                'name' => ucfirst($slug),
                'slug' => $slug,
            ]);
        }
        $role->users()->attach($user);
    }
}
