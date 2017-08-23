<?php

namespace App\Http\Controllers;
use App\Contracts;
use Carbon\Carbon;
use Cartalyst\Sentinel\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContractsController extends Controller
{
    public function index()
    {
        try{
            $results = Contracts::all();
            return view('admin.contracts.index', compact('results'));
        }catch (\Exception $ex){
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
        try{
            return view('admin.contracts.create');
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

        try {
            $contracts = new Contracts();
            $contracts->user_id = 0;
            $contracts->user_id = Sentinel::getUser()->id;
//            $contracts->status = 0;
            $contracts->description = Input::get('description');
            $contracts->requirements = Input::get('requirements');
            $contracts->duration = Input::get('duration');
            $contracts->deadline = Carbon::parse(Input::get('deadline'));
            $contracts->save();
            dd($contracts);
            return redirect()->back()->withInput()->with('success');
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->back()->withInput()->with('error', $ex->getMessage());
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
            $results = Contracts::where('id', $id)->first();
            return view('admin.contracts.show', compact('results'));
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
            $result = Contracts::where('id', $id)->first();
            return view('admin.contracts.edit', compact('result'));
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
            $contracts = Contracts::where('id', $id)->first();
            $contracts->description = Input::get('description');
            $contracts->requirements = Input::get('requirements');
            $contracts->duration = Input::get('duration');
            $contracts->deadline = Input::get('deadline');
            $contracts->save();
            return redirect()->back()->with('success', 'Success');
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
        try {
        $contracts = Contracts::where('id', $id)->delete();
        return redirect()->back()->with('success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
