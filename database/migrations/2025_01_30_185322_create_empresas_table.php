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
            $table->date('fecha_patente')->nullable();
            $table->boolean('posee_conformidad');
            $table->boolean('posee_runpa');
            $table->date('fecha_runpa')->nullable();
            $table->boolean('sucursal')->nullable();
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('cedula');
            $table->string('telefono');
            $table->longText('direccion');
            $table->foreignId('tipo_materiales_id')->nullable()->references('id')->on('tipo_materiales');
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->foreignId('parroquia_id')->nullable()->references('id')->on('parroquias');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
