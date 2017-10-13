<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriptionsController extends Controller
{
    public function store(Request $request)
    {
        $plan = Plan::findOrFail($request->plan);

        if ($request->user()->subscribedToPlan($plan->braintree_plan, 'main')) {
            return redirect()->route('plans')->with('error', 'Unauthorised operation');
        }

        if (!$request->user()->subscribed('main')) {
            $request->user()->newSubscription('main', $plan->braintree_plan)->create($request->payment_method_nonce);
        } else {
            $request->user()->subscription('main')->swap($plan->braintree_plan);
        }
        $user = $request->user();
        Mail::send('emails.subscription.new', ['user' => $user, 'plan' => $plan], function ($m) use ($user) {
            $m->from('customer@maxlogistics.eu', 'Max Logistics');
            $m->to($user->email)->subject('Subscription');
        });
        Mail::send('emails.subscription.fin_new', ['user' => $user, 'plan' => $plan], function ($m) use ($user) {
            $m->from('customer@maxlogistics.eu', 'Max Logistics');
            $m->to('finance@maxlogistics.eu')->subject('Subscription');
        });

        // redirect to home after a successful subscription
        return redirect()->route('home')->with('success', 'Subscribed to '.$plan->braintree_plan.' successfully');
    }

    public function cancel(Request $request)
    {
        $request->user()->subscription('main')->cancel();

        $user = $request->user();
        Mail::send('emails.subscription.cancel', ['user' => $user], function ($m) use ($user) {
            $m->from('customer@maxlogistics.eu', 'Max Logistics');
            $m->to($user->email)->subject('Subscription');

        });
        Mail::send('emails.subscription.fin_cancel', ['user' => $user], function ($m) use ($user) {
            $m->from('customer@maxlogistics.eu', 'Max Logistics');
            $m->to('finance@maxlogistics.eu')->subject('Subscription');

        });
        return redirect()->back()->with('success', 'You have successfully cancelled your subscription');
    }

    public function resume(Request $request)
    {
        $request->user()->subscription('main')->resume();

        $user = $request->user();
        Mail::send('emails.subscription.resume', ['user' => $user], function ($m) use ($user) {
            $m->from('customer@maxlogistics.eu', 'Max Logistics');
            $m->to($user->email)->subject('Subscription');

        });
        Mail::send('emails.subscription.fin_resume', ['user' => $user], function ($m) use ($user) {
            $m->from('customer@maxlogistics.eu', 'Max Logistics');
            $m->to('finance@maxlogistics.eu')->subject('Subscription');

        });
        return redirect()->back()->with('success', 'You have successfully resumed your subscription');
    }
}
