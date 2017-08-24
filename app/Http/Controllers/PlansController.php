<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index()
    {
        $results = Plan::orderBy('cost','asc')->get();
        return view('client.pages.pricing')->with(['results' => $results]);
    }

    public function show(Request $request, Plan $plan)
    {
        if ($request->user()->subscribedToPlan($plan->braintree_plan, 'main')) {
            return redirect()->route('plans')->with('error', 'Unauthorised operation');
        }
        return view('client.pages.plan')->with(['plan' => $plan]);
    }
}
