<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;

class PublicController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::all();
        return view('flights.index', compact('flights'));
    }



    /**
     * Display the specified resource.
     *
     * @param  Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        return view('flights.show', compact('flight'));
    }
}
