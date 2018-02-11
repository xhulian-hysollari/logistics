<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanRequest;
use App\Models\Plan;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index()
    {
        $results = Plan::orderBy('cost','asc')->get();
        return view('client.pages.pricing')->with(['results' => $results]);
    }
    public function getPlanList()
    {
        $results = Plan::orderBy('cost','asc')->get();
        return view('admin.plans.index')->with(['results' => $results]);
    }

    public function show(Request $request, Plan $plan)
    {
        if ($request->user()->subscribedToPlan($plan->braintree_plan, 'main')) {
            return redirect()->route('plans')->with('error', 'Unauthorised operation');
        }
        return view('client.pages.plan')->with(['plan' => $plan]);
    }

    public function create(){
        if (Sentinel::inRole('admin')){
            return view('admin.plans.create');
        }
        return redirect()->back()->with('error', 'Unauthorised operation');
    }

    public function store(PlanRequest $request){
        try{
            $plan = new Plan();
            $plan->name = $request->name;
            $plan->slug = str_slug($request->name);
            $plan->cost = $request->cost;
            $plan->duration = $request->duration;
            $plan->duration_type = $request->duration_type;
            $plan->freight_listing = $request->freight_listing;
            $plan->truck_listing = $request->truck_listing;
            $plan->tender_listing = $request->tender_listing;
            $plan->ads = $request->ads;
            $plan->free_chat = $request->free_chat;
            $plan->route_planning = $request->route_planning;
            $plan->free_assistance = $request->free_assistance;
            $plan->save();

            return redirect()->back()->with('success', 'Plan created successfully');
        }catch (\Exception $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function delete($slug){
        try{
            $plan = Plan::where('slug', $slug)->first();
            $plan->delete();
            return redirect()->back()->with('success', 'Plan deleted successfully');
        }catch (\Exception $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
}
