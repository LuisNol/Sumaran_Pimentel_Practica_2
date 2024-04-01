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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('especie_id');
            $table->unsignedBigInteger('recinto_id');
            $table->unsignedBigInteger('cuidador_id')->nullable();
            $table->foreign('especie_id')->references('id')->on('especies')->onDelete('cascade');
            $table->foreign('recinto_id')->references('id')->on('recintos')->onDelete('cascade');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
