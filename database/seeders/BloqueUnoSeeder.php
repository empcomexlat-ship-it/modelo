<?php

namespace Database\Seeders;

use App\Models\BloqueUno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloqueUnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BloqueUno::create([
            'titulo' => 'Sobre Mí',
            'titulo_descripcion' => 'Un breve resumen de mi perfil profesional y visión.',
            'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
            'imagen_seo' => 'Mi foto de perfil profesional',
            'subtitulo' => 'Mi experiencia',
            'subtitulo_descripcion' => 'Pasión por el cambio social, la política y la gestión empresarial.',
            'lista' => [
                [
                    'icono' => 'fa-book',
                    'icono_color' => '#007bff',
                    'texto' => 'Autor de mi libro “Perú, Tierra de Incautos”',
                    'texto_color' => '#007bff',
                ],
                [
                    'icono' => 'fa-lightbulb',
                    'icono_color' => '#007bff',
                    'texto' => 'Comparto ideas que inspiran el cambio social y político',
                    'texto_color' => '#007bff',
                ],
                [
                    'icono' => 'fa-briefcase',
                    'icono_color' => '#007bff',
                    'texto' => 'Cuento con experiencia en el sector empresarial y gestión pública',
                    'texto_color' => '#007bff',
                ],
            ],

            'boton' => [
                'icono' => 'fa-arrow-right',
                'fondo_color' => '#007bff',
                'texto' => 'Leer más',
                'texto_color' => '#007bff',
                'link' => '/sobre-mi'
            ],
        ]);
    }
}
