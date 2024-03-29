<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function about()
    {
        return view('front.about');
    }

    public function destinations()
    {
        return view('front.destination');
    }

    public function services()
    {
        return view('front.services');
    }

    public function service($slung)
    {
        $Services = DB::table('services')->where('slung',$slung)->get();
        return view('front.services',compact('Services'));
    }



    public function latest_news()
    {
        return view('front.latest-news');
    }

    public function destination()
    {
        return view('front.destination-single');
    }



}
