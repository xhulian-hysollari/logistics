<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TruckController extends Controller
{

    public function index()
    {
        try {
            $user = Sentinel::getUser();
            $results = Truck::where('user_id', $user->id)->get();
            return view('admin.truck.index', compact('results'));
        } catch (Exception $ex) {
            dd($ex);
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
        try {
            return view('admin.truck.create');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
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
            $trucks = new Truck();
            $trucks->user_id = Sentinel::getUser()->id;
            $trucks->weight = Input::get('weight');
            $trucks->length = Input::get('length');
            $trucks->height = Input::get('height');
            $trucks->type = Input::get('lorry_type');
            $trucks->plate = Input::get('plate');
            $trucks->location = Input::get('location');
            $trucks->description = Input::get('description');
            $trucks->status = 0;
            $trucks->save();

            return redirect()->route('trucks.index')->with('success', 'The Truck has been listed successfully!');

        } catch (Exception $ex) {
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
        try {
            $results = Truck::where('id', $id)->first();
            return view('admin.truck.show', compact('results'));
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $result = Truck::where('id', $id)->first();
            return view('admin.truck.edit', compact('result'));
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
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
            $trucks = Truck::where('id', $id)->first();
            $trucks->weight = Input::get('weight');
            $trucks->length = Input::get('length');
            $trucks->height = Input::get('height');
            $trucks->type = Input::get('lorry_type');
            $trucks->plate = Input::get('plate');
            $trucks->location = Input::get('location');
            $trucks->description = Input::get('description');
            $trucks->save();

            return redirect()->route('trucks.index')->with('success', 'The truck has been modified successfully!');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }

//        $table->integer('user_id')->unsigned();
//        $table->integer('status')->unsigned();
//        $table->string('weight', 50);
//        $table->string('length', 50);
//        $table->string('height', 50);
//        $table->string('type', 50);
//        $table->string('plate', 15);
//        $table->string('location', 255);
//        $table->string('description', 255);

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
            Truck::where('id', $id)->delete();
            return redirect()->route('trucks.index')->with('success', 'Truck has been removed from the listing!');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
