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

    public function index()
    {
        //
        return view('home.index');
    }

    public function gallery()
    {
        //
        return view('home.gallery');
    }
}
