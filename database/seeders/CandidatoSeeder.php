<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Candidato;

class CandidatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Candidato::factory()->create([
            'nombre' => 'Juan Pérez',
            'slug' => 'juan-perez',
            'frase' => 'Un nuevo comienzo para todos',
            'partido_politico' => 'Partido Esperanza Nacional',
        ]);
    }
}
