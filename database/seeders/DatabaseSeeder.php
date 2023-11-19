<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call other seeders here
        $this->call([
            // List all the seeders you want to run
            CategoriesTableSeeder::class,
            ItemsTableSeeder::class,
            LocationsTableSeeder::class,
            RentalsTableSeeder::class,
            UsersTableSeeder::class
            // ... any other seeders
        ]);
    }
}
