<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WatertTreatmentController extends Controller
{
    public function index()
    {
        return view('amarta_water_treatment/index');
    }

    public function aboutus()
    {
        return view('amarta_water_treatment/aboutus');
    }

    public function reverse_ormosis()
    {
        return view('amarta_water_treatment/ro');
    }

    public function contactus()
    {
        return view('landing_page/contactus');
    }
}
