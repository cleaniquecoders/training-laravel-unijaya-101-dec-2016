<?php

namespace App\Http\Controllers;

class StaticController extends Controller
{
    public function aboutUs()
    {
        return view('statics.about_us');
    }

    public function contactUs()
    {
        return view('statics.contact_us');
    }
}
