<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeatureNews;
use App\Models\LatestNews;
use App\Models\OurServices;
use App\Models\Slider;
use App\Models\StayUpToDate;

class FrontCOntroller extends Controller
{
    public function index()
    {
        $data['sliders'] = Slider::get();
        $data['ourservices'] = OurServices::get();
        $data['latest_news'] = LatestNews::latest()->limit(1)->get();
        $data['feature_news'] = FeatureNews::latest()->limit(2)->get();
        $data['stay_up_to_date'] = StayUpToDate::latest()->limit(1)->get();
        return view('front.index', $data);
    }

    public function about()
    {
        return view('front.about');
    }

    public function boardofdirectors()
    {
        return view('front.boardofdirectors');
    }

    public function leadership()
    {
        return view('front.leadership');
    }
}
