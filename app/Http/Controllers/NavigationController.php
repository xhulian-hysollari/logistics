<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Freight;
use App\Models\Legal;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Setting;
use App\Models\SocialLink;
use App\Models\Truck;
use App\Models\User;
use Carbon\Carbon;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\DB;

class NavigationController extends Controller
{
    public function getHomePage()
    {
        return view('client.pages.home');
    }

    public function getContactPage()
    {
        return view('client.pages.contact');
    }

    public function getAboutPage()
    {
        $about = Setting::where('type', 2)->first();
        return view('client.pages.about', compact('about'));
    }

    public function getFreightPage()
    {
//        $user = Sentinel::getUser();
        $results = Freight::orderBy('created_at', 'desc')->get();
        return view('client.pages.freight', compact('results'));
    }

    public function getTruckPage()
    {
//        $user = Sentinel::getUser();
        $results = Truck::all();
        return view('client.pages.truck', compact('results'));
    }

    public function getRegistrationPage()
    {
        return view('client.pages.register');
    }

    public function getLoginPage()
    {
        return view('client.pages.login');
    }

    public function getDashboardPage()
    {
        $registrations = [];
        for ($i = 1; $i <= 12; $i++){
            var_dump('I : ' . $i);
            $res = DB::table('users')->select(DB::raw('count(id) as `data`'),DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
                ->whereYear('created_at', Carbon::now()->format('Y'))
                ->whereRaw('MONTH(created_at) = '. $i)
                ->groupby('year','month')
                ->first();
                if($res){
                    $value = $res->data;
                    dd($res->data);
                }else{
                    $value = 0;

                }
            array_add($registrations, $i, $value);
            var_dump($registrations);
        }
        dd($registrations);
        return view('admin.dashboard.dashboard', compact('registrations'));
    }

    public function getDashboardPages($page = 'dashboard')
    {
        return view('admin.dashboard.' . $page);
    }

    public function getUserList()
    {
        $results = User::all();
        return view('admin.dashboard.users', compact('results'));
    }

    public function getFreightList()
    {
        $results = Freight::all();
        return view('admin.dashboard.listings', compact('results'));
    }

    public function getTruckList()
    {
        $results = Truck::all();
        return view('admin.dashboard.trucks', compact('results'));
    }

    public function getPartnersList()
    {
        $results = Partner::all();
        return view('admin.partners.index', compact('results'));
    }

    public function getServicesList()
    {
        $results = Service::all();
        return view('admin.services.index', compact('results'));
    }

    public function getLegalList()
    {
        $results = Legal::all();
        return view('admin.legal.index', compact('results'));
    }

    public function getSettings()
    {
        $contacts = Setting::where('type', 0)->get();
        $socials = Setting::where('type', 1)->get();
        $about = Setting::where('type', 2)->first();
        $mission = Setting::where('type', 3)->first();
        $sliders = Setting::where('type', 4)->get();
        $plans = Setting::where('type', 5)->get();
        $ads = Setting::where('type', 6)->get();
        $services = Setting::where('type', 7)->get();
        return view('admin.dashboard.settings', compact('contacts', 'socials', 'about', 'mission', 'sliders', 'plans', 'ads', 'services'));
    }

    public function getAdminPages($directory)
    {
        return view('admin.' . $directory . '.index');
    }
}
