<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
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
            $post = new Post();
            $post->type = Input::get('type');
            $post->save();
            $post->translateOrNew('sq')->title = Input::get('title_sq');
            $post->translateOrNew('en')->title = Input::get('title_en');
            $post->translateOrNew('sq')->content = Input::get('content_sq');
            $post->translateOrNew('en')->content = Input::get('content_en');
            $post->Save();
            return redirect()->back()->with('success', 'success');
        } catch (\Exception $ex) {
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
        $result = Post::where('id', $id)->first();
        return view('admin.services.show', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Post::where('id', $id)->first();
        return view('admin.services.create', compact('result'));
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
            $post = Post::where('id', $id)->get();
            $post->type = Input::get('type');
            $post->save();
            $post->translateOrNew('sq')->title = Input::get('title_sq');
            $post->translateOrNew('en')->title = Input::get('title_en');
            $post->translateOrNew('sq')->content = Input::get('content_sq');
            $post->translateOrNew('en')->content = Input::get('content_en');
            $post->Save();
            return redirect()->back()->with('success', 'success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
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
        //
    }
}
