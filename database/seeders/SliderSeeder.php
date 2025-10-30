<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $sliders = [
            [
                'nombre' => 'Slider 1',
                'imagenes' => json_encode([
                    [
                        'id' => 1,
                        'imagen_computadora' => 'http://127.0.0.1:8000/assets/imagen/sliders-computadora-1.jpg',
                        'imagen_movil' => 'http://127.0.0.1:8000/assets/imagen/sliders-movil-1.jpg',
                        'link' => 'https://example.com/link1',
                    ],
                    [
                        'id' => 2,
                        'imagen_computadora' => 'http://127.0.0.1:8000/assets/imagen/sliders-computadora-2.jpg',
                        'imagen_movil' => 'http://127.0.0.1:8000/assets/imagen/sliders-movil-2.jpg',
                        'link' => 'https://example.com/link2',
                    ],
                ]),
                'activo' => true,
            ],
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}
