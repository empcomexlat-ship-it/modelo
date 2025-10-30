<?php

namespace Database\Seeders;

use App\Models\Candidato;
use App\Models\Noticia;
use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $candidato = Candidato::first();
        Noticia::factory(15)->create(['candidato_id' => $candidato->id]);
    }
}
