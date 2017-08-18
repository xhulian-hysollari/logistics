<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//tuts https://www.sitepoint.com/laravel-and-braintree-sitting-in-a-tree/ https://www.sitepoint.com/laravel-and-braintree-middleware-and-other-advanced-concepts/ https://www.sitepoint.com/real-time-laravel-notifications-follows-sure-stream/

Route::get('/', ['as' => 'home', 'uses' => 'NavigationController@getHomePage']);
Route::get('/dashboard', function () {
    return view('admin.admin');
});
Route::get('/about', function () {
    return view('client.pages.about');
});

Route::get('/plans', 'PlansController@index');


Route::get('/register', ['as' => 'register', 'uses' => 'NavigationController@getRegistrationPage']);
Route::post('/register/autobot', ['as' => 'register.autobot', 'uses' => 'RegistrationController@register']);
Route::get('/login', ['as' => 'login', 'uses' => 'NavigationController@getLoginPage']);
Route::post('/login/autobot', ['as' => 'login.autobot', 'uses' => 'LoginController@login']);
Route::get('/activate/{id}/{code}', ['as' => 'activate.autobot', 'uses' => 'ActivationController@activate']);
Route::get('/profile', ['as' => 'profile', 'uses' => 'ProfileController@completeProfile']);
Route::post('/profile/autobot', ['as' => 'profile.autobot', 'uses' => 'ProfileController@complete']);

Route::middleware(['profile'])->group(function () {
    Route::get('/dashboard/freights', ['as' => 'freight.index', 'uses' => 'FreightController@index']);
    Route::get('/dashboard/freights/create', ['as' => 'freight.create', 'uses' => 'FreightController@create']);
    Route::get('/dashboard/freights/update', ['as' => 'freight.update', 'uses' => 'FreightController@update']);
    Route::get('/dashboard/freights/edit', ['as' => 'freight.edit', 'uses' => 'FreightController@edit']);
    Route::get('/dashboard/freights/show', ['as' => 'freight.show', 'uses' => 'FreightController@show']);
    Route::get('/dashboard/trucks', ['as' => 'trucks.index', 'uses' => 'TruckController@index']);
    Route::get('/dashboard/trucks/create', ['as' => 'trucks.create', 'uses' => 'TruckController@create']);
    Route::get('/dashboard/trucks/update', ['as' => 'trucks.update', 'uses' => 'TruckController@update']);
    Route::get('/dashboard/trucks/edit', ['as' => 'trucks.edit', 'uses' => 'TruckController@edit']);
    Route::get('/dashboard/trucks/show', ['as' => 'trucks.show', 'uses' => 'TruckController@show']);
});

Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.freight'), ['as' => 'freight', 'uses' => 'NavigationController@getFreightPage']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.about'), ['as' => 'about', 'uses' => 'NavigationController@getAboutPage']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.contact'), ['as' => 'contact', 'uses' => 'NavigationController@getContactPage']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.truck'), ['as' => 'truck', 'uses' => 'NavigationController@getTruckPage']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.service'), ['as' => 'service.view', 'uses' => 'NavigationController@getRegistrationPage']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.admin'), ['as' => 'admin', 'uses' => 'NavigationController@getAdminPages']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.logout'), ['as' => 'logout', 'uses' => 'LoginController@logout']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.coming_soon'), ['as' => 'coming_soon', 'uses' => 'NavigationController@getComingSoonPage']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.truck_create'), ['as' => 'truck.create', 'uses' => 'TruckController@create']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.truck_edit'), ['as' => 'truck.edit', 'uses' => 'TruckController@edit']);
Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.truck_store'), ['as' => 'truck.store', 'uses' => 'TruckController@store']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.truck_update'), ['as' => 'truck.update', 'uses' => 'TruckController@update']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.truck_show'), ['as' => 'truck.show', 'uses' => 'TruckController@update']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.freight_create'), ['as' => 'freight.create', 'uses' => 'FreightController@create']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.freight_edit'), ['as' => 'freight.edit', 'uses' => 'FreightController@edit']);
Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.freight_store'), ['as' => 'freight.store', 'uses' => 'FreightController@store']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.freight_update'), ['as' => 'freight.update', 'uses' => 'FreightController@update']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.freight_show'), ['as' => 'freight.show', 'uses' => 'FreightController@show']);
Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.bid_truck'), ['as' => 'bid.truck', 'uses' => 'BidController@bidTruck']);
Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.bid_freight'), ['as' => 'bid.freight', 'uses' => 'BidController@bidFreight']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.bid_index'), ['as' => 'bid.index', 'uses' => 'BidController@index']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.offer_index'), ['as' => 'bid.offer', 'uses' => 'BidController@offers']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.dashboard'), ['as' => 'dashboard', 'uses' => 'NavigationController@getDashboardPages']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.getUserList'), ['as' => 'user_list', 'uses' => 'NavigationController@getUserList']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.getFreightList'), ['as' => 'freight_list', 'uses' => 'NavigationController@getFreightList']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.getTruckList'), ['as' => 'truck_list', 'uses' => 'NavigationController@getTruckList']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.getPartnersList'), ['as' => 'partner_list', 'uses' => 'NavigationController@getPartnersList']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.getServicesList'), ['as' => 'service.list', 'uses' => 'NavigationController@getServicesList']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.getLegalList'), ['as' => 'legal.list', 'uses' => 'NavigationController@getLegalList']);

Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.partner_add'), ['as' => 'partner.add', 'uses' => 'PartnerController@create']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.partner_edit'), ['as' => 'partner.edit', 'uses' => 'PartnerController@edit']);
Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.partner_store'), ['as' => 'partner.store', 'uses' => 'PartnerController@store']);
Route::patch(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.partner_update'), ['as' => 'partner.update', 'uses' => 'PartnerController@update']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.partner_delete'), ['as' => 'partner.delete', 'uses' => 'PartnerController@destroy']);

Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.settings_social'), ['as' => 'settings.social', 'uses' => 'SettingController@social']);
Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.settings_contact'), ['as' => 'settings.contact', 'uses' => 'SettingController@contact']);
Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.settings_about'), ['as' => 'settings.about', 'uses' => 'SettingController@about']);
Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.settings_mission'), ['as' => 'settings.mission', 'uses' => 'SettingController@mission']);
Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.settings_payment'), ['as' => 'settings.payment', 'uses' => 'SettingController@payment']);
Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.settings_ads'), ['as' => 'settings.ads', 'uses' => 'SettingController@ads']);
Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.settings_slider'), ['as' => 'settings.slider', 'uses' => 'SettingController@slider']);
Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.settings_service'), ['as' => 'settings.service', 'uses' => 'SettingController@service']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.settings'), ['as' => 'settings', 'uses' => 'NavigationController@getSettings']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.settings_delete'), ['as' => 'setting.delete', 'uses' => 'SettingController@destroy']);

Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.service_add'), ['as' => 'service.add', 'uses' => 'ServiceController@create']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.service_edit'), ['as' => 'service.edit', 'uses' => 'ServiceController@edit']);
Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.service_store'), ['as' => 'service.store', 'uses' => 'ServiceController@store']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.service_delete'), ['as' => 'service.delete', 'uses' => 'ServiceController@destroy']);
Route::patch(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.service_update'), ['as' => 'service.update', 'uses' => 'ServiceController@update']);

Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.legal_add'), ['as' => 'legal.add', 'uses' => 'LegalController@create']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.legal_edit'), ['as' => 'legal.edit', 'uses' => 'LegalController@edit']);
Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.legal_store'), ['as' => 'legal.store', 'uses' => 'LegalController@store']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.legal_delete'), ['as' => 'legal.delete', 'uses' => 'LegalController@destroy']);
Route::patch(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.legal_update'), ['as' => 'legal.update', 'uses' => 'LegalController@update']);
//Route::get('url/path', ['as' => 'url_name', 'uses' => 'LegalController@update']);



//{{route('url_name')}}