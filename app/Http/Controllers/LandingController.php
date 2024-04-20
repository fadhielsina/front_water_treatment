<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing_page/index');
    }

    public function aboutus()
    {
        return view('landing_page/aboutus');
    }

    public function services()
    {
        return view('landing_page/services');
    }

    public function contactus()
    {
        return view('landing_page/contactus');
    }
}
