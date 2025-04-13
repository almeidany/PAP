<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{
    public function about_us()
    {
        //
        return view('home.about_us');
    }

    public function contests()
    {
        //
        return view('home.contests');
    }
}
