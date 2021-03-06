<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $results = Pages::all();
            return view('admin.pages.index', compact('results'));
        } catch (\Exception $ex) {
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
        return view('admin.pages.create');
        } catch (\Exception $ex) {
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
            $slug = strtolower( str_replace(' ', '-',strip_tags(Input::get('title'))));
            if (Pages::where('slug', $slug)->first()){
                $slug = $slug . str_random(5);
            }
            if(Input::get('about_page')){
                $slug = 'about-us';
            }
            $pages = new Pages();
            $pages->page_title = Input::get('title');
            $pages->slug = $slug;
            $pages->body = Input::get('body');
            $pages->save();
            return redirect()->route('pages.index')->with('success','Page was created succesfully!');
        } catch (\Exception $ex) {
            dd($ex);
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
            $results = Pages::where('id', $id)->first();
            return view('admin.pages.show', compact('results'));
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Display the specified resource on frontend.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getPage($slug)
    {
        try{
            $result = Pages::where('slug', $slug)->first();
            return view('client.pages.page', compact('result'));
        } catch (Exception $ex) {
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
        try {
            $result = Pages::where('id', $id)->first();
            return view('admin.pages.edit', compact('result'));
        } catch (\Exception $ex) {
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
        try {
            $pages = Pages::where('id', $id)->first();
            $pages->page_title = Input::get('title');
            $pages->body = Input::get('body');
            $pages->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $ex) {
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
            $pages = Pages::where('id', $id)->delete();
                return redirect()->back()->with('success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
