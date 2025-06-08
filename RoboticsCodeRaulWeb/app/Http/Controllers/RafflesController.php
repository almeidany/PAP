<?php

namespace App\Http\Controllers;

use App\Models\Raffles;
use Illuminate\Http\Request;

class RafflesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $raffles = Raffles::all();
        return view('raffles.index', compact('raffles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('raffles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Raffles $raffles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Raffles $raffles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Raffles $raffles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Raffles $raffles)
    {
        //
    }
}
