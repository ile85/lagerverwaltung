<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rental;
use App\Models\Item;
use App\Models\Location;
use App\Models\User;
use Faker\Factory as Faker;

class RentalsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        if (User::count() == 0) {
            User::factory()->count(50)->create(); 
        }
        $userIds = User::all()->pluck('id')->toArray();
        $itemIds = Item::pluck('id')->toArray();
        $locationIds = Location::pluck('id')->toArray();

        foreach (range(1, 50) as $index) {
            Rental::create([
                'user_id' => $faker->randomElement($userIds),
                'item_id' => $faker->randomElement($itemIds),
                'location_id' => $faker->randomElement($locationIds),
                'student_email' => $faker->safeEmail,
                'student_name' => $faker->name,
                'rented_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'returned_at' => $faker->randomElement([null, $faker->dateTimeBetween('now', '+1 month')]),
            ]);
        }
    }
}
