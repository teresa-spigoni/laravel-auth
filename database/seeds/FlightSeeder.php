<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Flight;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 5; $i++){

            $terminalDep = 'T' . (rand(1,5));
            $terminalArr = 'T' . (rand(1,5));

            $flight = new Flight();
            $flight->airline_company = $faker->name();
            $flight->airline_company_pic = 'https://image.jimcdn.com/app/cms/image/transf/none/path/sae80c598b88d76f3/image/i9e765d68447c66e0/version/1467359760/image.png';
            $flight->identifier = rand(10000, 99999);
            $flight->aircraft = rand(1000, 9999);
            $flight->departure = $faker->name();
            $flight->departure_datetime = '2020-03-03 20:00:00';
            $flight->arrival = $faker->name();
            $flight->arrival_datetime = '2020-03-03 20:00:00';
            $flight->status = $faker->name();
            $flight->departure_terminal = $terminalDep;
            $flight->arrival_terminal = $terminalArr;
            $flight->save();


        }
    }
}
