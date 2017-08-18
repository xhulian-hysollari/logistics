<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProfileController extends Controller
{
    public function completeProfile(){
        return view('client.pages.profile');
    }

    public function complete(){
        try{
            $user = Sentinel::getUser();
            $profile = new Profile();
            $profile->telephone = Input::get('telephone');
            $profile->mobile = Input::get('mobile');
            $profile->fax = Input::get('fax');
            $profile->skype = Input::get('skype');
            $profile->languages = Input::get('languages');
            $profile->company = Input::get('company');
            $profile->website = Input::get('website');
            $profile->about_me = Input::get('about_me');
            $profile->user_id = $user->id;
            $profile->save();
            return redirect()->route('home')->with('success', 'Your profile has been updated successfully!');
        }catch (\Exception $ex){
            return redirect()->back()->withInput()->with('error', 'There was an error while trying to update your profile. Please try again or contact customer support!');
        }

    }
}
