<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Contracts;
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
        return view('layout.pages.home');
    }

    public function getContactPage()
    {
        return view('layout.pages.contact');
    }

    public function getAboutPage()
    {
        return view('layout.pages.about');
    }

    public function getFreightPage()
    {
//        $user = Sentinel::getUser();
        $results = Freight::latest()->get();
        return view('layout.pages.freight', compact('results'))->render();
    }

    public function getTruckPage()
    {
//        $user = Sentinel::getUser();
        $results = Truck::active()->latest()->get();
        return view('layout.pages.truck', compact('results'))->render();
    }
    public function getTenderPage()
    {
//        $user = Sentinel::getUser();
        $results = Contracts::latest()->get();

        return view('layout.pages.tenders', compact('results'))->render();
    }

    public function getTenders(){
        $columns = array(
            array( 'db' => 'first_name', 'dt' => 'first_name' ),
            array( 'db' => 'last_name',  'dt' => 'last_name' ),
            array( 'db' => 'position',   'dt' => 'position' ),
            array( 'db' => 'office',     'dt' => 'office' ),
            array(
                'db'        => 'start_date',
                'dt'        => 'start_date',
                'formatter' => function( $d, $row ) {
                    return date( 'jS M y', strtotime($d));
                }
            ),
            array(
                'db'        => 'salary',
                'dt'        => 'salary',
                'formatter' => function( $d, $row ) {
                    return '$'.number_format($d);
                }
            )
        );
        return '';
    }

    public function getRegistrationPage()
    {
        return view('layout.pages.register');
    }

    public function getLoginPage()
    {
        return view('layout.pages.login');
    }

    public function getDashboardPage()
    {
        $registrations = [];
        $freights = [];
        $trucks = [];
        $tenders = [];
        for ($i = 1; $i <= 12; $i++){
            $res = DB::table('users')->select(DB::raw('count(id) as `data`'),DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
                ->whereYear('created_at', Carbon::now()->format('Y'))
                ->whereRaw('MONTH(created_at) = '. $i)
                ->groupby('year','month')
                ->first();
                if($res){
                    $value = $res->data;
                }else{
                    $value = 0;
                }
                array_push($registrations, $value);
        }
        for ($i = 1; $i <= 12; $i++){
            $res = DB::table('freights')->select(DB::raw('count(id) as `data`'),DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
                ->whereYear('created_at', Carbon::now()->format('Y'))
                ->whereRaw('MONTH(created_at) = '. $i)
                ->groupby('year','month')
                ->first();
                if($res){
                    $value = $res->data;
                }else{
                    $value = 0;
                }
                array_push($freights, $value);
        }
        for ($i = 1; $i <= 12; $i++){
            $res = DB::table('trucks')->select(DB::raw('count(id) as `data`'),DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
                ->whereYear('created_at', Carbon::now()->format('Y'))
                ->whereRaw('MONTH(created_at) = '. $i)
                ->groupby('year','month')
                ->first();
                if($res){
                    $value = $res->data;
                }else{
                    $value = 0;
                }
                array_push($trucks, $value);
        }
        for ($i = 1; $i <= 12; $i++){
            $res = DB::table('contracts')->select(DB::raw('count(id) as `data`'),DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
                ->whereYear('created_at', Carbon::now()->format('Y'))
                ->whereRaw('MONTH(created_at) = '. $i)
                ->groupby('year','month')
                ->first();
                if($res){
                    $value = $res->data;
                }else{
                    $value = 0;
                }
                array_push($tenders, $value);
        }
        return view('admin.dashboard.dashboard', compact('registrations','freights','trucks','tenders'));
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
