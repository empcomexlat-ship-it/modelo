<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bloque_unos', function (Blueprint $table) {
            $table->id();

            $table->string('titulo')->nullable();
            $table->text('titulo_descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->string('imagen_seo')->nullable();
            $table->string('subtitulo')->nullable();
            $table->string('subtitulo_descripcion')->nullable();
            $table->json('lista')->nullable();
            $table->json('boton')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bloque_unos');
    }
};
