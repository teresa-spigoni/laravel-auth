<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Flight;

class PrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('public.flights.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flights.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->formValidation($request);
        $data = $request->all();
        $newFlight = new Flight();
        $newFlight->fill($data);
        $newFlight->save();
        $flightStored = Flight::orderBy('id', 'desc')->first();
        return redirect()->route('flights.show', $flightStored);
    }

    /**
     * Display the specified resource.
     *
     * @param  Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        return redirect()->route('public.flights.show', $flight);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        return view('flights.edit', compact('flight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flight)
    {
        $this->formValidation($request);
        $data = $request->all();
        $flight->update($data);
        return view('flights.show', compact('flight'));
    }

    protected function formValidation(Request $request){
        $request->validate([
            'airline_company' => 'required',
            'airline_company_pic' => 'required',
            'identifier' => 'required',
            'aircraft' => 'required',
            'departure' => 'required',
            'departure_datetime' => 'required',
            'arrival' => 'required',
            'arrival_datetime' => 'required',
            'status' => 'required'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        $flight->delete();
        return redirect()->route('public.flights.index');
    }
}
