<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        $items = [
            'Maus', 'Tastatur', 'Laptop', 'Laptoptasche', 'Monitor', 
            'USB-Stick', 'Externe Festplatte', 'Router', 'Webcam', 'Headset', 
            'Grafiktablett', 'Drucker', 'Scanner', 'Projektor', 'Lautsprecher'
        ];

        foreach ($items as $itemName) {
            Item::create([
                'name' => $itemName,
                'description' => 'Beschreibung für ' . $itemName,
                'category_id' => rand(1, 5), // Random category ID, adjust as needed
                'location_id' => rand(1, 10), // Random location ID, adjust as needed
            ]);
        }
    }
}

