@extends('flights.layout')
@section('title', 'edit')
@section('content')
<div id="edit-root">
    <div class="the-form">
        @include('flights.form', ['edit' => true])
    </div>
</div>
@endsection
