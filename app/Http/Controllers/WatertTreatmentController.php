<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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

    public function reverse_osmosis()
    {
        return view('amarta_water_treatment/ro');
    }

    public function portfolio()
    {
        return view('amarta_water_treatment/portfolio');
    }

    public function blog()
    {
        $data = Blog::get();
        return view('amarta_water_treatment/blog', compact("data"));
    }

    public function contactus()
    {
        return view('amarta_water_treatment/contactus');
    }
}
