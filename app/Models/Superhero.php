<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Superhero extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'real_name',
        'gender',
        'universe_id'
    ];

    public function universe()
    {
        return $this->belongsTo(Universe::class);
    }
}