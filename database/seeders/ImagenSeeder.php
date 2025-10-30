<?php

namespace Database\Seeders;

use App\Models\Candidato;
use App\Models\Imagen;
use Illuminate\Database\Seeder;

class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $candidato = Candidato::first();

        Imagen::factory()->create([
            'imagenable_id' => $candidato->id,
            'imagenable_type' => Candidato::class,
        ]);
    }
}
