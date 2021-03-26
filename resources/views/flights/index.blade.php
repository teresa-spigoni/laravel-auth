@extends('flights.layout')
@section('title', 'index')
@section('content')
<div id="root">

    @if (Auth::check())
        <button class="btn btn-primary create-b"><a href="{{route('flights.create')}}"><i class="fas fa-plus"></i></a></button>
    @endif

    <table class="table flights-table">

        <thead class="thead-adr">

            <tr>
                <th scope="col">Airline Company</th>
                <th scope="col">Departure</th>
                <th scope="col">Arrival</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>

        </thead>

        <tbody>

            @foreach ($flights as $flight)

                <tr>
                    <td>
                        <img class="company-pic" src="{{$flight->airline_company_pic}}" alt="">
                        {{$flight->airline_company}}
                    </td>
                    <td>
                        {{$flight->departure}} <br>
                        {{$flight->departure_datetime}}
                    </td>
                    <td>
                        {{$flight->arrival}} <br>
                        {{$flight->arrival_datetime}}
                    </td>
                    <td>{{$flight->status}}</td>
                    <td class="buttons-col">

                        {{-- pulsante show --}}
                        <button class="btn btn-primary"><a href="{{route('public.flights.show', compact('flight'))}}"><i class="fas fa-eye"></i></a></button>

                        @if (Auth::check())
                            {{-- pulsante edit --}}
                            <button class="btn btn-primary"><a href="{{route('flights.edit', compact('flight'))}}"><i class="far fa-edit"></i></a></button>

                            {{-- pulsante delete --}}
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter{{ $flight->id }}">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            @include('flights.modal')
                        @else
                            <span><a href="{{route('public.flights.show', compact('flight'))}}">Click to read more</a></span>
                        @endif


                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>



</div>
@endsection
