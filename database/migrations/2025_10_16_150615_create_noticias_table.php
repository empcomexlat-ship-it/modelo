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
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();

            $table->foreignId('candidato_id')->nullable()->constrained('candidatos')->nullOnDelete();
            $table->string('titulo');
            $table->string('slug')->unique();
            $table->longText('contenido');
            $table->string('imagen')->nullable();
            $table->dateTime('publicado_en')->nullable();
            $table->boolean('estado')->default(true);

            // SEO opcional
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->unsignedBigInteger('views')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
