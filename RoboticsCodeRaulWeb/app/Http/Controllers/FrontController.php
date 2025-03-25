<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class FrontController extends Controller
{
    public function about_us()
    {
        //
        return view('home.about_us');
    }

    public function contest()
    {
        //
        return view('home.contest');
    }

    public function gallery()
    {
        //
        return view('');
    }
}
