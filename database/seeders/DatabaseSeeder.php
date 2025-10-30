<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CandidatoSeeder::class,
            PaginaSeeder::class,
            MenuSeeder::class,
            NoticiaSeeder::class,
            ImagenSeeder::class,
            SliderSeeder::class,
            TipoMensajeSeeder::class,
            MensajeSeeder::class,
            BloqueUnoSeeder::class,
            BloqueDosSeeder::class,
            CallToActionSeeder::class,
        ]);
    }
}
