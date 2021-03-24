@extends('flights.layout')
@section('title', 'create')
@section('content')
<div id="create-root">
    <div class="the-form">
        @include('flights.form', ['edit' => false])
    </div>
</div>
@endsection
