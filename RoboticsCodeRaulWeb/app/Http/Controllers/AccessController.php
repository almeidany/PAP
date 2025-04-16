<?php

namespace App\Http\Controllers;

use App\Models\Access;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('access.index');
    }
}
