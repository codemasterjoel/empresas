<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ejes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('parroquia_id')->nullable()->references('id')->on('parroquias');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('ejes');
    }
};
