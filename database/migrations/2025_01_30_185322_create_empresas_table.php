<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Uuid;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Uuid::uuid4()->toString());
            //$table->integer('codigo')->unique()->startingValue(1000);
            $table->string('nombre');
            $table->char('tipoRIF');
            $table->char('letra');
            $table->string('rif');
            $table->date('fecha_patente')->nullable();
            $table->date('fecha_runpa')->nullable();

            // ARCHIVOS PDF
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

            $table->integer('patente')->default(0);
            $table->integer('conformidad')->default(0);
            $table->integer('runpa')->default(0);
            $table->integer('rmercantil')->default(0);
            $table->integer('rif2')->default(0);
            $table->integer('solvencia')->default(0);
            $table->integer('arrendamiento')->default(0);
            $table->integer('catastral')->default(0);
            $table->integer('croquis')->default(0);
            $table->integer('plan')->default(0);
            $table->integer('origen')->default(0);
            $table->integer('riesgo')->default(0);

            $table->boolean('sucursal')->nullable();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cedula');
            $table->string('telefono');
            $table->longText('direccion');
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();

            // DATOS DE LA TRASNFERENCIA
            $table->bigInteger('referencia')->nullable();
            $table->foreignId('banco_id')->nullable()->references('id')->on('bancos');
            $table->string('bauche')->nullable();
            $table->date('fecha_pago')->nullable();
            $table->boolean('estatus')->nullable()->defaultFalse();
            $table->integer('aprobado')->default(0);
            
            $table->string('correo');
            $table->foreignId('categoria_id')->nullable()->references('id')->on('categorias');
            $table->foreignId('parroquia_id')->nullable()->references('id')->on('parroquias');
            $table->foreignId('user_id')->nullable()->references('id')->on('users');
            $table->timestamps();

        });
        DB::statement('ALTER TABLE empresas ADD codigo INT unsigned NOT NULL AUTO_INCREMENT UNIQUE');
        DB::statement('ALTER TABLE empresas AUTO_INCREMENT = 1001');
    }

    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
