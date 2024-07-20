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
        Schema::create('extintores', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('ubicacion');
            $table->string('agente_extintor');
            $table->string('tipo');
            $table->string('ultima_recarga');
            $table->string('proxima_recarga');
            $table->string('ultimo_mantenimiento');
            $table->string('proximo_mantenimiento');
            $table->string('ultima_prueba');
            $table->string('proxima_prueba');
            $table->string('letrero');
            $table->string('fecha_fabricacion');
            $table->string('vencimiento_antiguedad');
            $table->string('estado_actual');
            $table->string('observaciones');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extintores');
    }
};
