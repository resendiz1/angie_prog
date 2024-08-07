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
            $table->unsignedBigInteger('comision_id');
            $table->string('nombre_reviso');
            $table->string('manometro');
            $table->string('precinto');
            $table->string('etiqueta_mantenimientos');
            $table->string('holograma');
            $table->text('observaciones');
            $table->timestamps();

            $table->foreign('extintor_id')->references('id')->on('extintores')->onDelete('cascade');
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
