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
use Illuminate\Http\Request;

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
Route::get('/register', ['as' => 'register', 'uses' => 'NavigationController@getRegistrationPage']);
Route::post('/register/autobot', ['as' => 'register.autobot', 'uses' => 'RegistrationController@register']);
Route::get('/login', ['as' => 'login', 'uses' => 'NavigationController@getLoginPage']);
Route::post('/login/autobot', ['as' => 'login.autobot', 'uses' => 'LoginController@login']);
Route::get('/activate/{id}/{code}', ['as' => 'activate.autobot', 'uses' => 'ActivationController@activate']);
Route::post('/braintree/webhooks', '\Laravel\Cashier\Http\Controllers\WebhookController@handleWebhook');
Route::get('/freights', ['as' => 'freight', 'uses' => 'NavigationController@getFreightPage']);
Route::get('/page/{slug}', ['as' => 'pages', 'uses' => 'PagesController@getPage']);
Route::get('/contact-us', ['as' => 'contact', 'uses' => 'NavigationController@getContactPage']);
Route::get('/trucks', ['as' => 'truck', 'uses' => 'NavigationController@getTruckPage']);
Route::get('/braintree/token', 'BraintreeTokenController@token');

Route::middleware(['guest'])->group(function () {

    Route::get('logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);
    Route::get('user/invoice/{invoice}', function (Request $request, $invoiceId) {
        return $request->user()->downloadInvoice($invoiceId, [
            'vendor'  => 'Max Logistics',
            'product' => 'Monthly Subscription',
        ]);
    });
    Route::middleware(['profile'])->group(function () {
        /*
        |--------------------------------------------------------------------------
        | Subscription Routes
        |--------------------------------------------------------------------------
        | All the routes related to subscription
        |
        */

        Route::get('/plan/{plan}', ['as' => 'selected.plan', 'uses' => 'PlansController@show']);
        Route::get('/user/profile', ['as' => 'dashboard.profile', 'uses' => 'ProfileController@profile']);
        Route::post('/subscribe', ['as' => 'user.subscribe', 'uses' => 'SubscriptionsController@store']);
        Route::post('/subscription/cancel', ['as' => 'subscription.cancel', 'uses' => 'SubscriptionsController@cancel']);
        Route::post('/subscription/resume', ['as' => 'subscription.resume', 'uses' => 'SubscriptionsController@resume']);
        Route::middleware(['lastKnight'])->group(function () {
            /*
            |--------------------------------------------------------------------------
            | User activity Routes
            |--------------------------------------------------------------------------
            | All the routes related to user activities
            |
            */

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

            Route::middleware(['hasExcalibur'])->group(function () {
                /*
                |--------------------------------------------------------------------------
                | Subscription Routes
                |--------------------------------------------------------------------------
                | All the routes related to subscription
                |
                */
                Route::post('/truck/{id}/bid', ['as' => 'truck.bid', 'uses' => 'BidController@bidTruck']);
                Route::post('/freight/{id}/bid', ['as' => 'freight.bid', 'uses' => 'BidController@bidFreight']);
                Route::post('/contract/{id}/bid', ['as' => 'contract.bid', 'uses' => 'BidController@bidContract']);
            });

            Route::get('/my-bids', ['as' => 'bid.index', 'uses' => 'BidController@index']);
            Route::get('/my-offers', ['as' => 'bid.offer', 'uses' => 'BidController@offers']);
        });
    });

    /*
    |--------------------------------------------------------------------------
    | Profile Routes
    |--------------------------------------------------------------------------
    | All the routes related to profile
    |
    */

    Route::get('/profile', ['as' => 'profile', 'uses' => 'ProfileController@completeProfile']);
    Route::post('/profile/autobot', ['as' => 'profile.autobot', 'uses' => 'ProfileController@complete']);


    Route::middleware(['optimus'])->group(function () {

        Route::get('users', ['as' => 'user_list', 'uses' => 'NavigationController@getUserList']);

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
        | Partner Routes
        |--------------------------------------------------------------------------
        | All the routes related to managing partners
        |
        */

        Route::get('/partners', ['as' => 'partner_list', 'uses' => 'NavigationController@getPartnersList']);
        Route::get('/partner/create', ['as' => 'partner.add', 'uses' => 'PartnerController@create']);
        Route::get('/partner/{id}/edit', ['as' => 'partner.edit', 'uses' => 'PartnerController@edit']);
        Route::post('/partner/save',['as' => 'partner.store', 'uses' => 'PartnerController@store']);
        Route::patch('/partner/{id}/save', ['as' => 'partner.update', 'uses' => 'PartnerController@update']);
        Route::get('/partner/{id}/delete', ['as' => 'partner.delete', 'uses' => 'PartnerController@destroy']);

        /*
        |--------------------------------------------------------------------------
        | Settings Routes
        |--------------------------------------------------------------------------
        | All the routes related to website settings
        |
        */

        Route::post('/settings/social', ['as' => 'settings.social', 'uses' => 'SettingController@social']);
        Route::post('/settings/contact', ['as' => 'settings.contact', 'uses' => 'SettingController@contact']);
        Route::post('/settings/about', ['as' => 'settings.about', 'uses' => 'SettingController@about']);
        Route::post('/settings/mission', ['as' => 'settings.mission', 'uses' => 'SettingController@mission']);
        Route::post('/settings/payment', ['as' => 'settings.payment', 'uses' => 'SettingController@payment']);
        Route::post('/settings/ads', ['as' => 'settings.ads', 'uses' => 'SettingController@ads']);
        Route::post('/settings/slider', ['as' => 'settings.slider', 'uses' => 'SettingController@slider']);
        Route::post('/settings/service', ['as' => 'settings.service', 'uses' => 'SettingController@service']);
        Route::get('/settings', ['as' => 'settings', 'uses' => 'NavigationController@getSettings']);
        Route::get('/settings/{id}/delete', ['as' => 'setting.delete', 'uses' => 'SettingController@destroy']);
    });

});

Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.admin'), ['as' => 'admin', 'uses' => 'NavigationController@getAdminPages']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.getFreightList'), ['as' => 'freight_list', 'uses' => 'NavigationController@getFreightList']);
Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.getTruckList'), ['as' => 'truck_list', 'uses' => 'NavigationController@getTruckList']);