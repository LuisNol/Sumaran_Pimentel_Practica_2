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
        Schema::create('cuidador_tipo_especies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cuidador_id');
            $table->unsignedBigInteger('especie_id');
            $table->foreign('cuidador_id')->references('id')->on('cuidadors')->onDelete('cascade');
            $table->foreign('especie_id')->references('id')->on('especies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuidador_tipo_especies');
    }
};
