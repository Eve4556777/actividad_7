<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Universe extends Model
{
    use HasFactory;
    protected $fillable = [
        'universe',
        'company',
        'age',
    ];

    public function superheroes()
    {
        return $this->hasMany(SuperHero::class);
    }
}