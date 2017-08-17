<?php

namespace App\Http\Controllers;

use App\Models\Freight;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class FreightControllerTBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Sentinel::getUser();
        $results = Freight::where('user_id', $user->id)->get();
        return view('client.pages.freight', compact('results'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.freight.create');
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
            $freight = new Freight();
            $freight->user_id = Sentinel::getUser()->id;
            $freight->freight_id = Input::get('freight_id');
            $freight->weight = Input::get('weight');
            $freight->length = Input::get('length');
            $freight->height = Input::get('height');
            $freight->volume = Input::get('volume');
            $freight->type = Input::get('lorry_type');
            $freight->quantity = Input::get('quantity');
            $freight->destination = Input::get('destination');
            $freight->quantity = Input::get('quantity');
            $freight->location = Input::get('location');
            $freight->status = 0;
            $freight->description = Input::get('description');
            $freight->save();
            return redirect()->back()->with('success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error');
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
        $result = Freight::where('id', $id)->first();
        return view('client.freight.show', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Freight::where('id', $id)->first();
        return view('client.freight.edit', compact('result'));
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
            $freight = Freight::where('id', $id)->first();
            $freight->user_id = Sentinel::getUser()->id;
            $freight->departure = Input::get('departure');
            $freight->destination = Input::get('destination');
            $freight->weight = Input::get('weight');
            $freight->length = Input::get('length');
            $freight->height = Input::get('height');
            $freight->type = Input::get('lorry_type');
            $freight->status = Input::get('status');
            $freight->location = Input::get('location');
            $freight->description = Input::get('description');
            $freight->save();
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
            $freight = Freight::where('id', $id)->delete();
            return redirect()->back()->with('success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error');
        }
    }
}
