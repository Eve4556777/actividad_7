<?php

namespace App\Http\Controllers;

use App\Models\Superhero;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes', compact('superheroes'));
    }
}