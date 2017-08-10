<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ServiceController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            $service = new Service();
            $service->type = Input::get('type');
            $service->save();
            $service->translateOrNew('sq')->title = Input::get("title_sq");
            $service->translateOrNew('sq')->content = Input::get("content_sq");
            $service->translateOrNew('en')->title = Input::get("title_en");
            $service->translateOrNew('en')->content = Input::get("content_en");
            $service->save();
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
        $result = Service::where('id', $id)->first();
        return view('admin.services.edit', compact('result'));
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
            $service = Service::where('id', $id)->first();
            $service->type = Input::get('type');
            $service->save();
            $service->translateOrNew('sq')->title = Input::get("title_sq");
            $service->translateOrNew('sq')->content = Input::get("content_sq");
            $service->translateOrNew('en')->title = Input::get("title_en");
            $service->translateOrNew('en')->content = Input::get("content_en");
            $service->save();
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
            Service::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
}
