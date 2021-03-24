<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable=['airline_company', 'airline_company_pic', 'identifier', 'aircraft', 'departure', 'departure_datetime', 'arrival', 'arrival_datetime', 'status'];
}
