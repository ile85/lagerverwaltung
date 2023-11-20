<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('de_DE');

        foreach (range(1, 50) as $index) {
            Item::create([
                'name' => $faker->name,
                'description' => $faker->text(150),
                'category_id' => $faker->numberBetween(1, 5),
                'location_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}

