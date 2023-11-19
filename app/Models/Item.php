<?php
/**
  * Stellt einen Artikel im Inventarsystem dar.
  * Ein Artikel gehört zu einer Kategorie und kann mehrere Ausleihen haben.
  */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id'];

    /**
     * Rufen Sie die Kategorie ab, zu der das Element gehört.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }  
    /**
     * Set the item's name.
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower(trim($value));
    }

    /**
     * Set the item's category ID.
     */
    public function setCategoryIdAttribute($value)
    {
        if (!Category::find($value)) {
            throw new \Exception("Invalid category ID.");
        }
        $this->attributes['category_id'] = $value;
    }
    public function run()
    {
        $faker = Faker::create('de_DE');
        
        foreach (range(1, 10) as $index) {
            Item::create([
                'name' => $faker->word,
                // Add other necessary fields
            ]);
        }
    }
}
