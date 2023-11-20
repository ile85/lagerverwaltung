<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('de_DE');

        foreach (range(1, 10) as $index) {
            Location::create([
                'ort' => $faker->city,
                'adresse' => $faker->address, // Changed to address to be more appropriate for the 'adresse' field
            ]);
        }
    }
}
