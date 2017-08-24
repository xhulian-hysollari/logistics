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
Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'NavigationController@getDashboardPage']);

Route::get('/about', function () {
    return view('client.pages.about');
});

/*
|--------------------------------------------------------------------------
| Global Routes
|--------------------------------------------------------------------------
| All the routes that do not need a middleware
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'NavigationController@getHomePage']);
Route::get('/plans', ['as' => 'plans', 'uses' => 'PlansController@index']);


Route::middleware(['guest'])->group(function () {
    Route::get('/plan/{plan}', ['as' => 'selected.plan', 'uses' => 'PlansController@show']);
    Route::get('/user/profile', ['as' => 'dashboard.profile', 'uses' => 'ProfileController@profile']);
});
Route::get('/register', ['as' => 'register', 'uses' => 'NavigationController@getRegistrationPage']);
Route::post('/register/autobot', ['as' => 'register.autobot', 'uses' => 'RegistrationController@register']);
Route::get('/login', ['as' => 'login', 'uses' => 'NavigationController@getLoginPage']);
Route::post('/login/autobot', ['as' => 'login.autobot', 'uses' => 'LoginController@login']);
Route::get('/activate/{id}/{code}', ['as' => 'activate.autobot', 'uses' => 'ActivationController@activate']);
Route::post('/braintree/webhooks', '\Laravel\Cashier\Http\Controllers\WebhookController@handleWebhook');
Route::get('/freights', ['as' => 'freight', 'uses' => 'NavigationController@getFreightPage']);
Route::get('/about-us', ['as' => 'about', 'uses' => 'NavigationController@getAboutPage']);
Route::get('/contact-us', ['as' => 'contact', 'uses' => 'NavigationController@getContactPage']);
Route::get('/trucks', ['as' => 'truck', 'uses' => 'NavigationController@getTruckPage']);

/*
|--------------------------------------------------------------------------
| Subscription Routes
|--------------------------------------------------------------------------
| All the routes related to subscription
|
*/

Route::get('/braintree/token', 'BraintreeTokenController@token');
Route::post('/subscribe', ['as' => 'user.subscribe', 'uses' => 'SubscriptionsController@store']);
Route::post('/subscription/cancel', ['as' => 'subscription.cancel', 'uses' => 'SubscriptionsController@cancel']);
Route::post('/subscription/resume', ['as' => 'subscription.resume', 'uses' => 'SubscriptionsController@resume']);

/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
| All the routes related to profile
|
*/

Route::get('/profile', ['as' => 'profile', 'uses' => 'ProfileController@completeProfile']);
Route::post('/profile/autobot', ['as' => 'profile.autobot', 'uses' => 'ProfileController@complete']);

/*
|--------------------------------------------------------------------------
| Contract Routes
|--------------------------------------------------------------------------
| All the routes related to contracts
|
*/

Route::get('/contracts', ['as' => 'contracts.index', 'uses' => 'ContractsController@index']);
Route::get('/contracts/create', ['as' => 'contracts.create', 'uses' => 'ContractsController@create']);
Route::post('/contracts/save', ['as' => 'contracts.store', 'uses' => 'ContractsController@store']);
Route::get('/contracts/show/{id}', ['as' => 'contracts.show', 'uses' => 'ContractsController@show']);
Route::get('/contracts/edit/{id}', ['as' => 'contracts.edit', 'uses' => 'ContractsController@edit']);
Route::patch('/contracts/update/{id}', ['as' => 'contracts.update', 'uses' => 'ContractsController@update']);

/*
|--------------------------------------------------------------------------
| CMS Pages Routes
|--------------------------------------------------------------------------
| All the routes related to CMS pages
|
*/

Route::get('/pages', ['as' => 'pages.index', 'uses' => 'PagesController@index']);
Route::get('/pages/create', ['as' => 'pages.create', 'uses' => 'PagesController@create']);
Route::post('/pages/save', ['as' => 'pages.store', 'uses' => 'PagesController@store']);
Route::get('/pages/show/{pages}', ['as' => 'pages.show', 'uses' => 'PagesController@show']);
Route::get('/pages/edit/{id}', ['as' => 'pages.edit', 'uses' => 'PagesController@edit']);
Route::patch('/pages/update/{id}', ['as' => 'pages.update', 'uses' => 'PagesController@update']);

/*
|--------------------------------------------------------------------------
| User activity Routes
|--------------------------------------------------------------------------
| All the routes related to user activities
|
*/

Route::middleware(['profile'])->group(function () {
    Route::get('/freights/index', ['as' => 'freight.index', 'uses' => 'FreightController@index']);
    Route::get('/freights/create', ['as' => 'freight.create', 'uses' => 'FreightController@create']);
    Route::post('/freights/save', ['as' => 'freight.store', 'uses' => 'FreightController@store']);
    Route::get('/freights/show/{id}', ['as' => 'freight.show', 'uses' => 'FreightController@show']);
    Route::get('/freights/edit/{id}', ['as' => 'freight.edit', 'uses' => 'FreightController@edit']);
    Route::patch('/freights/update/{id}', ['as' => 'freight.update', 'uses' => 'FreightController@update']);
    Route::get('/trucks/index', ['as' => 'trucks.index', 'uses' => 'TruckController@index']);
    Route::get('/trucks/create', ['as' => 'trucks.create', 'uses' => 'TruckController@create']);
    Route::post('/trucks/store', ['as' => 'trucks.store', 'uses' => 'TruckController@store']);
    Route::get('/trucks/show/{id}', ['as' => 'trucks.show', 'uses' => 'TruckController@show']);
    Route::get('/trucks/edit/{id}', ['as' => 'trucks.edit', 'uses' => 'TruckController@edit']);
    Route::patch('/trucks/update/{id}', ['as' => 'trucks.update', 'uses' => 'TruckController@update']);
});

Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.admin'), ['as' => 'admin', 'uses' => 'NavigationController@getAdminPages']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.logout'), ['as' => 'logout', 'uses' => 'LoginController@logout']);
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

Route::post('/settings/social', ['as' => 'settings.social', 'uses' => 'SettingController@social']);
Route::post('/settings/contact', ['as' => 'settings.contact', 'uses' => 'SettingController@contact']);
Route::post('/settings/about', ['as' => 'settings.about', 'uses' => 'SettingController@about']);
Route::post('/settings/mission', ['as' => 'settings.mission', 'uses' => 'SettingController@mission']);
Route::post('/settings/payment', ['as' => 'settings.payment', 'uses' => 'SettingController@payment']);
Route::post('/settings/ads', ['as' => 'settings.ads', 'uses' => 'SettingController@ads']);
Route::post('/settings/slider', ['as' => 'settings.slider', 'uses' => 'SettingController@slider']);
Route::post('/settings/service', ['as' => 'settings.service', 'uses' => 'SettingController@service']);
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