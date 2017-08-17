<?php

namespace App\Http\Controllers;

use App\Models\Freight;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class FreightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $user = Sentinel::getUser();
//            $results = Freight::where('user_id', $user->id)->get();
            $results = Freight::all();
            return view('admin.freight.index', compact('results'));
        }catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            return view('admin.freight.create');
        }catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $freight = new Freight();
//            $freight->user_id = Sentinel::getUser()->id;
            $freight->user_id = 1;
            $freight->freight_id = Input::get('freight_id');
            $freight->weight = Input::get('weight');
            $freight->height = Input::get('height');
            $freight->length = Input::get('length');
            $freight->volume = Input::get('volume');
            $freight->type = Input::get('lorry_type');
            $freight->location = Input::get('location');
            $freight->description = Input::get('description');
            $freight->quantity = Input::get('quantity');
            $freight->status = 0;
            $freight->save();
            return redirect()->back()->with('success');
        }catch (\Exception $ex){
            dd($ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $results = Freight::where('id', $id)->first();
            return view('admin.freight.show', compact('results'));
        }catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $results = Freight::where('id', $id)->first();
            return view('admin.freight.edit', compact('results'));
        }catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $freight = Freight::where('id', $id)->first();
            $freight->weight = Input::get('weight');
            $freight->length = Input::get('length');
            $freight->height = Input::get('height');
            $freight->type = Input::get('type');
            $freight->location = Input::get('location');
            $freight->description = Input::get('description');
            $freight->volume = Input::get('volume');
            $freight->quantity = Input::get('quantity');
            $freight->save();
            return redirect()->back()->with('success');
        }catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $freight = Freight::where('id', $id)->delete();
            return redirect()->back()->with('success');
        }catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
