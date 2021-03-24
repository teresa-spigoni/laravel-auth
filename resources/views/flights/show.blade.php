@extends('flights.layout')
@section('title', 'show')
@section('content')
<div id="show-root">


    <div class="details">

        <img class="show-flight-img" src="{{$flight->airline_company_pic}}" alt="">
        <h1>Flight details</h1>

        <div><b>Airline Company: </b>{{$flight->airline_company}}</div>
        <div><b>Identifier: </b>{{$flight->identifier}}</div>
        <div><b>Aircraft: </b>{{$flight->aircraft}}</div>
        <div><b>Departure: <br></b>from {{$flight->departure}} <br> {{$flight->departure_datetime}}</div>
        <div><b>Arrival: <br></b>to {{$flight->arrival}} <br> {{$flight->arrival_datetime}}</div>
        <div><b>Status: </b>{{$flight->status}}</div>
        <div><b>Ultimo aggiornamento: </b>{{$flight->updated_at}}</div>

        @if (Auth::check())
            <button class="btn btn-primary edit-b"><a href="{{route('flights.edit', compact('flight'))}}">Edit <i class="far fa-edit"></i></a></button>
        @endif

    </div>

</div>
@endsection
