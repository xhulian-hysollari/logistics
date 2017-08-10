<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Sentinel::getUser();
        $results = Truck::where('user_id', 1)->get();
        return view('client.truck.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.truck.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $truck = new Truck();
            $truck->user_id = 1;
//                Sentinel::getUser()->id;
            $truck->weight = Input::get('weight');
            $truck->length = Input::get('length');
            $truck->height = Input::get('height');
            $truck->type = Input::get('lorry_type');
            $truck->plate = Input::get('plate');
            $truck->location = Input::get('location');
            $truck->status = 0;
            $truck->description = Input::get('description');
            $truck->save();
            return redirect()->back()->with('success');
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Truck::where('id', $id)->first();
        return view('client.truck.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $truck = Truck::where('id', $id)->first();
            $truck->weight = Input::get('weight');
            $truck->length = Input::get('length');
            $truck->height = Input::get('height');
            $truck->type = Input::get('lorry_type');
            $truck->plate = Input::get('plate');
            $truck->location = Input::get('location');
            $truck->status = 0;
            $truck->description = Input::get('description');
            $truck->save();
            return redirect()->back()->with('success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $truck = Truck::where('id', $id)->delete();
            return redirect()->back()->with('success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error');
        }
    }
}
