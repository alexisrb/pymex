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
        Schema::create('publicities', function (Blueprint $table) {
            $table->id();
            $table->string('id_espectacular');
            $table->string('numero_fiscalizacion');
            $table->string('alias');
            $table->string('tipo');
            $table->string('google_data');
            $table->string('direccion');
            $table->string('colonia');
            $table->string('ciudad');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicities');
    }
};
