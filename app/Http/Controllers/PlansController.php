<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index()
    {
        return view('client.pages.pricing')->with(['results' => Plan::get()]);
    }

    public function show(Request $request, Plan $plan)
    {
        if ($request->user()->subscribedToPlan($plan->braintree_plan, 'main')) {
            return redirect()->route('plans')->with('error', 'Unauthorised operation');
        }
        return view('client.pages.plan')->with(['plan' => $plan]);
    }
}
