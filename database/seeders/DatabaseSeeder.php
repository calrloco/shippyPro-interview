<?php

namespace Database\Seeders;

use App\Models\Airport;
use App\Models\Flight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* Creating 5 airports and 2 flights for each airport. */
        for($i=0;$i<10;$i++){
            Airport::create([
                    'name'=>fake()->unique()->city(),
                    'lat'=>fake()->unique()->latitude(),
                    'lng'=>fake()->unique()->longitude(),
                    'code'=>fake()->postcode(),
            ]);
        }

        $airports = Airport::get();

        foreach ($airports as $airport){
            for ($i=0; $i<4; $i++) {
                $randomAirport = Airport::inRandomOrder()->get()->first();
                Flight::create([
                    'name' => fake()->company(),
                    'price' => fake()->numberBetween(100, 200000),
                    'code_departure' => $airport->code,
                    'code_arrival' => $randomAirport->code,
                ]);
            }
        }
    }
}
