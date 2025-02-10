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
            $table->string('codigo')->unique();
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
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('correo');
            $table->foreignId('categoria_id')->nullable()->references('id')->on('categorias');
            $table->foreignId('parroquia_id')->nullable()->references('id')->on('parroquias');
            $table->foreignId('user_id')->nullable()->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
