<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidato>
 */
class CandidatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = $this->faker->name();
        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'frase' => $this->faker->sentence(),
            'partido_politico' => $this->faker->company(),
            'imagen_principal' => 'https://via.placeholder.com/600x400.png?text=Candidato',
            'descripcion_corta' => $this->faker->paragraph(),
            'biografia' => $this->faker->paragraphs(3, true),
            'facebook' => 'https://facebook.com/candidato',
            'instagram' => 'https://instagram.com/candidato',
            'tiktok' => 'https://tiktok.com/@candidato',
            'youtube' => 'https://youtube.com/@candidato',
            'estado' => true,
        ];
    }
}
