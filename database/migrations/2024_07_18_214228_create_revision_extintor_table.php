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
        Schema::create('revision_extintor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('extintor_id');
            $table->string('manometro');
            $table->string('precinto');
            $table->string('etiqueta_mantenimientos');
            $table->string('holograma');
            $table->text('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revision_extintor');
    }
};
