<?php

namespace App\Http\Controllers;

use App\Models\FeatureNews;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class FeatureNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['feature_news'] = FeatureNews::paginate(20);
        return view('feature-news.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feature-news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FeatureNews::Create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->route('feature-news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeatureNews  $featureNews
     * @return \Illuminate\Http\Response
     */
    public function show(FeatureNews $featureNews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeatureNews  $featureNews
     * @return \Illuminate\Http\Response
     */
    public function edit(FeatureNews $featureNews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeatureNews  $featureNews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeatureNews $featureNews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeatureNews  $featureNews
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeatureNews $featureNews)
    {
        //
    }
}
