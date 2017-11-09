<?php

namespace App\Http\Controllers;

use App\Http\Requests\FreightRequest;
use App\Models\Bid;
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
            //if(Sentinel::inRole('admin')){
                $results = Freight::all()->latest();
            //}else{
            //    $results = Freight::where('user_id', Sentinel::getUser()->id)->get();
            //}
            return view('admin.freight.index', compact('results'))->render();
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
    public function store(FreightRequest $request)
    {
        try{
            $freight = new Freight();
            $freight->user_id = Sentinel::getUser()->id;
            $freight->freight_id = $request->freight_id;
            $freight->weight = $request->weight;
            $freight->height = $request->height;
            $freight->length = $request->length;
            $freight->volume = $request->volume;
            $freight->type = $request->lorry_type;
            $freight->width = $request->width;
            $freight->loading = $request->loading;
            $freight->loading_lat = $request->loading_lat;
            $freight->loading_lng = $request->loading_lng;
            $freight->unloading = $request->unloading;
            $freight->unloading_lng = $request->unloading_lat;
            $freight->unloading_lat = $request->unloading_lng;
            $freight->description = $request->description;
            $freight->quantity = $request->quantity;
            $freight->status = 0;
            $freight->save();
            return redirect()->route('freight.index')->with('success', 'The Freight has been listed successfully!');
        }catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
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
            $result = Freight::where('id', $id)->first();
            return view('admin.freight.show', compact('result'));
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
    public function update(FreightRequest $request, $id)
    {
        try{
            $freight = Freight::where('id', $id)->first();
            $freight->freight_id = $request->freight_id;
            $freight->weight = $request->weight;
            $freight->length = $request->length;
            $freight->height = $request->height;
            $freight->type = $request->lorry_type;
            $freight->width = $request->width;
            $freight->loading = $request->loading;
            $freight->loading_lat = $request->loading_lat;
            $freight->loading_lng = $request->loading_lng;
            $freight->unloading = $request->unloading;
            $freight->unloading_lng = $request->unloading_lat;
            $freight->unloading_lat = $request->unloading_lng;
            $freight->description = $request->description;
            $freight->volume = $request->volume;
            $freight->quantity = $request->quantity;
            $freight->save();
            return redirect()->route('freight.index')->with('success', 'Freight modification completed successfully!');
        }catch (\Exception $ex){
            dd($ex);
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
            $bids = Bid::where('freight_id', $id)->get();
            foreach ($bids as $bid){
                $bid->delete();
            }
            return redirect()->route('freight.index')->with('success', 'Freight has been removed from the listing!');
        }catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
