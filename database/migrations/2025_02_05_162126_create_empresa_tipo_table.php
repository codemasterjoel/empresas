<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('empresa_tipos', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('empresa_id')->references('id')->on('empresas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('tipo_materiales_id')->references('id')->on('tipo_materiales')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('empresa_tipos');
    }
};
