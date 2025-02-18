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
            $table->char('tipoRIF');
            $table->char('letra');
            $table->string('rif');
            $table->date('fecha_patente')->nullable();
            $table->date('fecha_runpa')->nullable();
            $table->string('patentePDF')->nullable();
            $table->string('conformidadPDF')->nullable();
            $table->string('runpaPDF')->nullable();
            $table->string('rmercantilPDF')->nullable();
            $table->string('rifPDF')->nullable();
            $table->string('solvenciaPDF')->nullable();
            $table->string('arrendamientoPDF')->nullable();
            $table->string('catastralPDF')->nullable();
            $table->string('croquisPDF')->nullable();
            $table->string('planPDF')->nullable();
            $table->string('origenPDF')->nullable();
            $table->string('riesgoPDF')->nullable();
            $table->boolean('sucursal')->nullable();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cedula');
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
