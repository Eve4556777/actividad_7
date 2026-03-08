<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


public function up()
{
    Schema::create('superheroes', function (Blueprint $table) {
        $table->id();
        $table->string('name', 100);
        $table->string('real_name', 100);
        $table->enum('gender', ['Male', 'Female'])->default('Female');
        $table->foreignId('universe_id')->constrained('universes');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};
