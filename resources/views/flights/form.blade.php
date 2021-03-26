@php
    if(isset($edit) && !empty($edit)) {
        $method = 'PUT';
        $url = route('flights.update', compact('flight'));
    } else {
        $method = 'POST';
        $url = route('flights.store');
    }
@endphp

<form class="needs-validation" action="{{$url}}" method="post" novalidate>

    @csrf
    <input name="_method" type="hidden" value="POST">

    @method($method)

    <div class="form-group">
        <label for="airline_company">Airline Company</label>
        <input type="text" name="airline_company" class="form-control {{ $errors->has('airline_company') ? 'is-invalid' : '' }}" id="airline_company" placeholder="Airline Company" required value="{{isset($flight) ? $flight->airline_company : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('airline_company') }}
        </div>
    </div>

    <div class="form-group">
        <label for="airline_company_pic">Airline Company Pic URL</label>
        <input type="text" name="airline_company_pic" class="form-control {{ $errors->has('airline_company_pic') ? 'is-invalid' : '' }}" id="airline_company_pic" placeholder="Airline Company Pic URL" required value="{{isset($flight) ? $flight->airline_company_pic : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('airline_company_pic') }}
        </div>
    </div>

    <div class="form-group">
        <label for="identifier">Identifier</label>
        <input type="text" name="identifier" class="form-control {{ $errors->has('identifier') ? 'is-invalid' : '' }}" id="identifier" placeholder="Identifier" required value="{{isset($flight) ? $flight->identifier : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('identifier') }}
        </div>
    </div>

    <div class="form-group">
        <label for="aircraft">Aircraft</label>
        <input type="text" name="aircraft" class="form-control {{ $errors->has('aircraft') ? 'is-invalid' : '' }}" id="aircraft" placeholder="Aircraft" required value="{{isset($flight) ? $flight->aircraft : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('aircraft') }}
        </div>
    </div>

    <div class="form-group">
        <label for="departure">Departure</label>
        <input type="text" name="departure" class="form-control {{ $errors->has('departure') ? 'is-invalid' : '' }}" id="departure" placeholder="Departure" required value="{{isset($flight) ? $flight->departure : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('departure') }}
        </div>
    </div>

    <div class="form-group">
        <label for="departure_datetime">Departure Date and Time</label>
        <input type="datetime-local" name="departure_datetime" class="form-control {{ $errors->has('departure_datetime') ? 'is-invalid' : '' }}" id="departure_datetime" placeholder="Departure Date and Time" required value="{{isset($flight) ? $flight->departure_datetime : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('departure_datetime') }}
        </div>
    </div>

    <div class="form-group">
        <label for="arrival">Arrival</label>
        <input type="text" name="arrival" class="form-control {{ $errors->has('arrival') ? 'is-invalid' : '' }}" id="arrival" placeholder="Arrival" required value="{{isset($flight) ? $flight->arrival : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('arrival') }}
        </div>
    </div>

    <div class="form-group">
        <label for="arrival_datetime">Arrival Date and Time</label>
        <input type="datetime-local" name="arrival_datetime" class="form-control {{ $errors->has('arrival_datetime') ? 'is-invalid' : '' }}" id="arrival_datetime" placeholder="Arrival Date and Time" required value="{{isset($flight) ? $flight->arrival_datetime : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('arrival_datetime') }}
        </div>
    </div>

    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" id="status" placeholder="Status" required value="{{isset($flight) ? $flight->status : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('status') }}
        </div>
    </div>

    <div class="form-group">
        <label for="departure_terminal">Departure Terminal</label>
        <input type="text" name="departure_terminal" class="form-control {{ $errors->has('departure_terminal') ? 'is-invalid' : '' }}" id="departure_terminal" placeholder="Departure Terminal" required value="{{isset($flight) ? $flight->departure_terminal : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('departure_terminal') }}
        </div>
    </div>

    <div class="form-group">
        <label for="arrival_terminal">Arrival Terminal</label>
        <input type="text" name="arrival_terminal" class="form-control {{ $errors->has('arrival_terminal') ? 'is-invalid' : '' }}" id="arrival_terminal" placeholder="Arrival Terminal" required value="{{isset($flight) ? $flight->arrival_terminal : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('arrival_terminal') }}
        </div>
    </div>

    <input type="submit" value="Submit" class="btn btn-primary form-b">

</form>

