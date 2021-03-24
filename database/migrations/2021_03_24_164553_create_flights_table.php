<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('airline_company', 255);
            $table->string('airline_company_pic', 2083);
            $table->string('identifier', 10);
            $table->string('aircraft', 6);
            $table->string('departure', 200);
            $table->dateTime('departure_datetime', 0);
            $table->string('arrival', 200);
            $table->dateTime('arrival_datetime', 0);
            $table->string('status', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
