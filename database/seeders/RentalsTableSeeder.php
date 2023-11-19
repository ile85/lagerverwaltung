<?php

namespace Database\Seeders;

use App\Models\Rental;
use App\Models\Location; // You need to reference the Location model
use Illuminate\Database\Seeder;

class RentalsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Get all location IDs as an array
        $locationIds = Location::pluck('id')->toArray();

        foreach (range(1, 50) as $index) {
            // Ensure a valid location_id is used by selecting a random one from the location IDs array
            $location_id = $faker->randomElement($locationIds);

            Rental::create([
                'location_id' => $location_id,
                'student_email' => $faker->safeEmail,
                'student_name' => $faker->name,
                'item_id' => $faker->numberBetween(1, 50), // Make sure this references a valid item ID
                'rented_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'returned_at' => $faker->randomElement([null, $faker->dateTimeBetween('now', '+1 month')]),
            ]);
        }
    }
}
