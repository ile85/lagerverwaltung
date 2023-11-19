<?php
/**
  * Stellt eine Kategorie von Artikeln im Inventarsystem dar.
  * Jede Kategorie kann mehrere Elemente enthalten.
  */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst(strtolower(trim($value)));
    }
}
