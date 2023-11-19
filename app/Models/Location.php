<?php
/**
  * Stellt einen Standort im Inventarsystem dar.
  * Ein Standort kann mehrere Artikel und Mietobjekte haben.
  */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'ort', 
        'adresse',
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
    /**
     * Set the location's ort (place).
     */
    public function setOrtAttribute($value)
    {
        $this->attributes['ort'] = ucfirst(strtolower(trim($value)));
    }

    /**
     * Set the location's adresse (address).
     */
    public function setAdresseAttribute($value)
    {
        $this->attributes['adresse'] = strtolower(trim($value));
    }
    public function run()
    {
        $faker = Faker::create('de_DE');
        
        foreach (range(1, 5) as $index) {
            Location::create([
                'name' => $faker->city,
                // Add other necessary fields
            ]);
        }
    }
}
