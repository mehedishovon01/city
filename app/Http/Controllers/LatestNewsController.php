<?php

namespace App\Http\Controllers;

use App\Models\LatestNews;
use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['latest_news'] = LatestNews::paginate(20);
        return view('latest-news.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('latest-news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new LatestNews();
        $data['header_title'] = $request->header_title;
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['link'] = $request->link;

        $file=$request->file('image');
        if ($file){
            $name = time().$file->getClientOriginalName();
            $file->move('public/uploads/latest-news/',$name);
            $data->image = $name;
        }
        $data->save();
        return redirect()->route('latest-news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LatestNews  $latestNews
     * @return \Illuminate\Http\Response
     */
    public function show(LatestNews $latestNews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LatestNews  $latestNews
     * @return \Illuminate\Http\Response
     */
    public function edit(LatestNews $latestNews)
    {
        return view('latest-news.edit', compact('latestNews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LatestNews  $latestNews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LatestNews $latestNews)
    {
        $latestNews['header_title'] = $request->header_title;
        $latestNews['title'] = $request->title;
        $latestNews['description'] = $request->description;
        $latestNews['link'] = $request->link;

        $file=$request->file('image');
        if ($file){
            $name = time().$file->getClientOriginalName();
            $file->move('public/uploads/latest-news/',$name);
            $latestNews->image = $name;
        }
        $latestNews->update();

        return redirect()->route('latest-news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LatestNews  $latestNews
     * @return \Illuminate\Http\Response
     */
    public function destroy(LatestNews $latestNews)
    {
        //
    }
}
