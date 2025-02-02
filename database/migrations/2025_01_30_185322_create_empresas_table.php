<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('rif');
            $table->boolean('posee_patente');
            $table->boolean('posee_conformidad');
            $table->boolean('posee_rumpa');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('cedula');
            $table->string('telefono');
            $table->longText('direccion');
            $table->string('tipo_materiales');
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
