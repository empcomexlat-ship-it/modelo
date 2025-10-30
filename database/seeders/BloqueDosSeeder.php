<?php

namespace Database\Seeders;

use App\Models\BloqueDos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloqueDosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BloqueDos::create([
            'titulo' => 'Sobre Mí',
            'titulo_descripcion' => 'Un breve resumen de mi perfil profesional y visión.',
            'lista' => [
                [
                    'titulo' => 'fa-book',
                    'titulo_descripcion' => 'Autor de mi libro “Perú, Tierra de Incautos”',
                    'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                    'imagen_seo' => 'Mi foto de perfil profesional',
                ],
                [
                    'titulo' => 'fa-lightbulb',
                    'titulo_descripcion' => 'Comparto ideas que inspiran el cambio social y político',
                    'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                    'imagen_seo' => 'Mi foto de perfil profesional',
                ],
                [
                    'titulo' => 'fa-briefcase',
                    'titulo_descripcion' => 'Cuento con experiencia en el sector empresarial y gestión pública',
                    'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                    'imagen_seo' => 'Mi foto de perfil profesional',
                ],
            ],
        ]);
    }
}
