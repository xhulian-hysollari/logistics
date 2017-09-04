<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Http\Requests\SliderRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SettingController extends Controller
{

    public function social()
    {
        try {
            $value = Input::get('value');
            $title = Input::get('title');
            $social = Setting::where('title', $title)->where('type', 1)->first();
            if ($social) {
                $social->value = $value;
            } else {
                $social = new Setting();
                $social->type = 1;
                $social->value = $value;
                $social->title = $title;
            }
            $social->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function contact()
    {
        try {
            $value = Input::get('value');
            $title = Input::get('title');
            $contact = Setting::where('title', $title)->where('type', 0)->first();
            if ($contact) {
                $contact->value = $value;
            } else {
                $contact = new Setting();
                $contact->type = 0;
                $contact->value = $value;
                $contact->title = $title;
            }
            $contact->save();
            return redirect()->back()->with('success', 'Success');
        }catch (\Exception $ex) {
            dd($ex->getMessage());
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function about()
    {
        try {
            $value = Input::get('value');
            $title = 'About Us';
            $about = Setting::where('title', $title)->where('type', 2)->first();
            if ($about) {
                $about->value = $value;
            } else {
                $about = new Setting();
                $about->type = 2;
                $about->title = $title;
                $about->value = $value;
            }
            $about->save();
            return redirect()->back()->with('success', 'Success');
        }catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function mission()
    {
        try {
            $value = Input::get('value');
            $title = 'mission';
            $mission = Setting::where('title', $title)->where('type', 3)->first();
            if ($mission) {
                $mission->value = $value;
            } else {
                $mission = new Setting();
                $mission->type = 3;
                $mission->title = $title;
                $mission->value = $value;
                $mission->save();
            }
            $mission->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function payment()
    {
        try {
            $value = Input::get('value');
            $title = Input::get('title');
            $optional = Input::get('optional');
            $payment = Setting::where('title', $title)->where('type', 5)->first();
            if ($payment) {
                $payment->value = $value;
                $payment->value = $value;
                $payment->optional = $optional;
            } else {
                $payment = new Setting();
                $payment->optional = $optional;
                $payment->type = 5;
                $payment->title = $title;
                $payment->value = $value;
            }
            $payment->save();
            return redirect()->back()->with('success', 'Success');
        }catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function ads()
    {
        try {
            $value = Input::get('value');
            $title = Input::get('title');
            $ads = Setting::where('title', $title)->where('type', 6)->first();
            if ($ads) {
                $ads->value = $value;
            } else {
                $ads = new Setting();
                $ads->type = 6;
                $ads->title = $title;
                $ads->value = $value;
            }
            $ads->save();
            return redirect()->back()->with('success', 'Success');
        }catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function slider(SliderRequest $request)
    {
        try {
            $value = $request->get('value');
            $title = $request->get('title');
            $optional = $request->file('optional');
            $filename = $optional->store('settings');
            $slider = new Setting();
            $slider->optional = $filename;
            $slider->type = 4;
            $slider->title = $title;
            $slider->value = $value;
            $slider->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            return redirect()->back()->with('error', $ex->getMessage());

        }
    }

    public function service(ServiceRequest $request)
    {
        try {
            $value = $request->get('value');
            $title = $request->get('title');
            $optional = $request->file('optional');
            $filename = $optional->store('settings');
            $service = new Setting();
            $service->optional = $filename;
            $service->type = 7;
            $service->title = $title;
            $service->value = $value;
            $service->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $setting = Setting::find($id);
            $setting->deleteTranslations();
            $setting->delete();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
