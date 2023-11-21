<?php
/**
  * Stellt eine Miettransaktion im Inventarsystem dar.
  * Jeder Vermietung ist ein Artikel und ein Standort zugeordnet.
  */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Location;
use Illuminate\Database\Seeder;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_email',
        'student_name',
        'item_id',
        'user_id',
        'location_id',
        'rented_at', 
        'returned_at'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function user()
    {
    return $this->belongsTo(User::class);
    }

     /**
     * Set the rental's student email.
     */
    public function setStudentEmailAttribute($value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception("Invalid email format.");
        }
        $this->attributes['student_email'] = strtolower(trim($value));
    }

    public function run()
    {
        foreach (range(1, 20) as $index) {
            Rental::create([
                'item_id' => Item::inRandomOrder()->first()->id,
                'location_id' => Location::inRandomOrder()->first()->id,
                // Add other necessary fields
            ]);
        }
    }
}

