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
            $social = Setting::whereHas('translations', function ($query) use ($title) {
                $query->where('locale', 'sq')
                    ->where('title', $title);
            })->where('type', 1)->first();
            if ($social) {
                $social->translateOrNew('sq')->value = $value;
            } else {
                $social = new Setting();
                $social->type = 1;
                $social->save();
                $social->translateOrNew('sq')->value = $value;
                $social->translateOrNew('sq')->title = $title;
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
            $contact = Setting::whereHas('translations', function ($query) use ($title) {
                $query->where('locale', 'sq')
                    ->where('title', $title);
            })->where('type', 0)->first();
            if ($contact) {
                $contact->translateOrNew('sq')->value = $value;
            } else {
                $contact = new Setting();
                $contact->type = 0;
                $contact->save();
                $contact->translateOrNew('sq')->value = $value;
                $contact->translateOrNew('sq')->title = $title;
            }
            $contact->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function about()
    {
        try {
            $value_sq = Input::get('value_sq');
            $value_en = Input::get('value_en');
            $title = 'About Us';
            $about = Setting::whereHas('translations', function ($query) use ($title) {
                $query->where('locale', 'sq')
                    ->where('title', $title);
            })->where('type', 2)->first();
            if ($about) {
                $about->translateOrNew('sq')->value = $value_sq;
                $about->translateOrNew('en')->value = $value_en;
            } else {
                $about = new Setting();
                $about->type = 2;
                $about->save();
                $about->translateOrNew('sq')->title = $title;
                $about->translateOrNew('en')->title = $title;
                $about->translateOrNew('sq')->value = $value_sq;
                $about->translateOrNew('en')->value = $value_en;
            }
            $about->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function mission()
    {
        try {
            $value_sq = Input::get('value_sq');
            $value_en = Input::get('value_en');
            $title = 'mission';
            $mission = Setting::whereHas('translations', function ($query) use ($title) {
                $query->where('locale', 'sq')
                    ->where('title', $title);
            })->where('type', 3)->first();
            if ($mission) {
                $mission->translateOrNew('sq')->value = $value_sq;
                $mission->translateOrNew('en')->value = $value_en;
            } else {
                $mission = new Setting();
                $mission->type = 3;
                $mission->save();
                $mission->translateOrNew('sq')->title = $title;
                $mission->translateOrNew('en')->title = $title;
                $mission->translateOrNew('sq')->value = $value_sq;
                $mission->translateOrNew('en')->value = $value_en;
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
            $value_sq = Input::get('value_sq');
            $value_en = Input::get('value_en');
            $title = Input::get('title');
            $optional = Input::get('optional');
            $payment = Setting::whereHas('translations', function ($query) use ($title) {
                $query->where('locale', 'sq')
                    ->where('title', $title);
            })->where('type', 5)->first();
            if ($payment) {
                $payment->translateOrNew('sq')->value = $value_sq;
                $payment->translateOrNew('en')->value = $value_en;
                $payment->optional = $optional;
            } else {
                $payment = new Setting();
                $payment->optional = $optional;
                $payment->type = 5;
                $payment->save();
                $payment->translateOrNew('sq')->title = $title;
                $payment->translateOrNew('en')->title = $title;
                $payment->translateOrNew('sq')->value = $value_sq;
                $payment->translateOrNew('en')->value = $value_en;
            }
            $payment->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function ads()
    {
        try {
            $value_sq = Input::get('value_sq');
            $value_en = Input::get('value_en');
            $title = Input::get('title');
            $ads = Setting::whereHas('translations', function ($query) use ($title) {
                $query->where('locale', 'sq')
                    ->where('title', $title);
            })->where('type', 6)->first();
            if ($ads) {
                $ads->translateOrNew('sq')->value = $value_sq;
                $ads->translateOrNew('en')->value = $value_en;
            } else {
                $ads = new Setting();
                $ads->type = 6;
                $ads->save();
                $ads->translateOrNew('sq')->title = $title;
                $ads->translateOrNew('en')->title = $title;
                $ads->translateOrNew('sq')->value = $value_sq;
                $ads->translateOrNew('en')->value = $value_en;
            }
            $ads->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function slider(SliderRequest $request)
    {
        try {
            $value_sq = $request->get('value_sq');
            $value_en = $request->get('value_en');
            $title_sq = $request->get('title_sq');
            $title_en = $request->get('title_en');
            $optional = $request->file('optional');
            $filename = $optional->store('settings');
            $slider = new Setting();
            $slider->optional = $filename;
            $slider->type = 4;
            $slider->save();
            $slider->translateOrNew('sq')->title = $title_sq;
            $slider->translateOrNew('en')->title = $title_en;
            $slider->translateOrNew('sq')->value = $value_sq;
            $slider->translateOrNew('en')->value = $value_en;
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
            $value_sq = $request->get('value_sq');
            $value_en = $request->get('value_en');
            $title_sq = $request->get('title_sq');
            $title_en = $request->get('title_en');
            $optional = $request->file('optional');
            $filename = $optional->store('settings');
            $service = new Setting();
            $service->optional = $filename;
            $service->type = 7;
            $service->save();
            $service->translateOrNew('sq')->title = $title_sq;
            $service->translateOrNew('en')->title = $title_en;
            $service->translateOrNew('sq')->value = $value_sq;
            $service->translateOrNew('en')->value = $value_en;
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
