<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/superheroes', function () {
    return view('superheroes');
});

Route::get('/universes', function () {
    return view('universes');
});

Route::get('/superpowers', function () {
    return view('superpowers');
});
/*
|Rutas Universe
*/
Route::get('/universes/create', function () {
    $universe = Universe::create([
        'universe' => 'Marvel',
        'company' => 'Marvel',
        'age' => 'modern'
    ]);

    return response()->json([
        'message' => 'Universe created successfully',
        'universe' => $universe
    ]);
});
Route::get('/universes/read/{id}', function ($id) {
    $universe = Universe::with('superheroes')->find($id);

    return response()->json([
        'universe' => $universe
    ]);
});
Route::get('/universes/update/{id}', function ($id) {
    $universe = Universe::find($id);

    $universe->update([
        'age' => 'golden'
    ]);

    return response()->json([
        'message' => 'Universe updated successfully',
        'universe' => $universe
    ]);
});
/*
| Rutas Superhero
*/
Route::get('/superheroes/create', function () {
    $superhero = Superhero::create([
        'name' => 'Batman',
        'real_name' => 'Bruce Wayne',
        'gender' => 'male',
        'universe_id' => 1
    ]);

    return response()->json([
        'message' => 'Superhero created successfully',
        'superhero' => $superhero
    ]);
});

Route::get('/superheroes/read/{id}', function ($id) {
    $superhero = Superhero::with('universe')->find($id);

    return response()->json([
        'superhero' => $superhero
    ]);
});

Route::get('/superheroes/update/{id}', function ($id) {
    $superhero = Superhero::find($id);

    $superhero->update([
        'gender' => 'female'
    ]);

    return response()->json([
        'message' => 'Superhero updated successfully',
        'superhero' => $superhero
    ]);
});