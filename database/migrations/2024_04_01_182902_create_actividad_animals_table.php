<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('actividad_animals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actividad_id');
            $table->unsignedBigInteger('animal_id');
            $table->foreign('actividad_id')->references('id')->on('actividads')->onDelete('cascade');
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividad_animals');
    }
};
