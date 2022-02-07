<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trips;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i<20; $i++){
            $newTrip = new Trips();
            $newTrip->destination = $faker->city();
            $newTrip->n_people = $faker->randomDigit();
            $newTrip->price = $faker->randomFloat(2, 100, 10000);
            $newTrip->departure = $faker->dateTimeThisYear('+4 months');
            $newTrip->flight_duration = $faker->randomFloat(2, 1, 24);
            $newTrip->save();
        }
    }
}
