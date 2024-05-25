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
        Schema::create('contratistas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa');
            $table->string('id_empresa');
            $table->string('nombre_completo');
            $table->string('ine');
            $table->string('nss');
            $table->string('dc3');
            $table->boolean('eliminado_empresa')->default(false);
            $table->boolean('autorizado_entrar')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratistas');
    }
};
