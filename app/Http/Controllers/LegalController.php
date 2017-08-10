<?php

namespace App\Http\Controllers;

use App\Models\Legal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LegalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.legal.create');
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
            $legal = new Legal();
            $legal->type = Input::get('type');
            $legal->save();
            $legal->translateOrNew('sq')->title = Input::get("title_sq");
            $legal->translateOrNew('sq')->content = Input::get("content_sq");
            $legal->translateOrNew('en')->title = Input::get("title_en");
            $legal->translateOrNew('en')->content = Input::get("content_en");
            $legal->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
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
        $result = Legal::where('id', $id)->first();
        return view('admin.legal.edit', compact('result'));
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
            $legal = Legal::where('id', $id)->first();
            $legal->type = Input::get('type');
            $legal->save();
            $legal->translateOrNew('sq')->title = Input::get("title_sq");
            $legal->translateOrNew('sq')->content = Input::get("content_sq");
            $legal->translateOrNew('en')->title = Input::get("title_en");
            $legal->translateOrNew('en')->content = Input::get("content_en");
            $legal->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
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
            Legal::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
}
