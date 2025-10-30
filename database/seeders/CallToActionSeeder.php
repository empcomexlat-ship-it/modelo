<?php

namespace Database\Seeders;

use App\Models\CallToAction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CallToActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CallToAction::create([
            'titulo' => '¿Listo para comenzar?',
            'subtitulo' => 'Impulsa tu presencia digital con nosotros hoy mismo.',
            'imagen' => 'http://127.0.0.1:8000/assets/imagen/cta-banner.jpg',
            'imagen_seo' => 'Banner de llamada a la acción',
            'boton' => [
                'texto' => 'Contáctame',
                'link' => '/contacto',
                'icono' => 'fa-solid fa-paper-plane',
                'color_fondo' => '#007bff',
                'color_texto' => '#ffffff'
            ],
        ]);
    }
}
