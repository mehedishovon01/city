<?php

namespace App\Http\Controllers;

use App\Models\OurServices;
use Illuminate\Http\Request;

class OurServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['our_services'] = OurServices::paginate(20);
        return view('our-service.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('our-service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new OurServices();
        $data['title'] = $request->title;
        $data['description'] = $request->description;

        $file=$request->file('image');
        if ($file){
            $name = time().$file->getClientOriginalName();
            $file->move('public/uploads/ourservice/',$name);
            $data->image = $name;
        }
        $data->save();
        return redirect()->route('our-services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OurServices  $ourServices
     * @return \Illuminate\Http\Response
     */
    public function show(OurServices $ourServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurServices  $ourServices
     * @return \Illuminate\Http\Response
     */
    public function edit(OurServices $ourServices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurServices  $ourServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurServices $ourServices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurServices  $ourServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurServices $ourServices)
    {
        //
    }
}
