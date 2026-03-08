<?php

namespace App\Http\Controllers;

use App\Models\Universe;

class UniverseController extends Controller
{
    public function index()
    {
        $universes = Universe::all();
        return view('universes', compact('universes'));
    }
}