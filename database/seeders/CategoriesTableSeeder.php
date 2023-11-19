<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $specificCategories = [
            'Computer',
            'Tastaturen',  // Keyboards
            'Mäuse',       // Mice
            'Monitore',    // Monitors
            'Speicher',    // Storage
            'Software',
            'Netzwerkgeräte',  // Networking devices
            // ... add more specific categories as needed
        ];

        // Create specific categories
        foreach ($specificCategories as $categoryName) {
            Category::create([
                'name' => $categoryName,
                'description' => 'Description for ' . $categoryName,
            ]);
        }

        // Optionally add additional random categories with Faker
        $faker = \Faker\Factory::create();
        foreach (range(1, 5) as $index) {
            Category::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
            ]);
        }
    }
}
