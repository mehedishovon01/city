<?php

namespace App\Http\Controllers;

use App\Models\StayUpToDate;
use Illuminate\Http\Request;

class StayUpToDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['stay_up_to_date'] = StayUpToDate::paginate(20);
        return view('stayuptodate.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stayuptodate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new StayUpToDate();
        $data['title'] = $request->title;
        $data['description'] = $request->description;

        $file=$request->file('image');
        if ($file){
            $name = time().$file->getClientOriginalName();
            $file->move('public/uploads/stayuptodate/',$name);
            $data->image = $name;
        }
        $data->save();
        return redirect()->route('stay-up-to-date.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StayUpToDate  $stayUpToDate
     * @return \Illuminate\Http\Response
     */
    public function show(StayUpToDate $stayUpToDate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StayUpToDate  $stayUpToDate
     * @return \Illuminate\Http\Response
     */
    public function edit(StayUpToDate $stayUpToDate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StayUpToDate  $stayUpToDate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StayUpToDate $stayUpToDate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StayUpToDate  $stayUpToDate
     * @return \Illuminate\Http\Response
     */
    public function destroy(StayUpToDate $stayUpToDate)
    {
        //
    }
}
