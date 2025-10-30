<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Pagina;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nosotros = Pagina::where('slug', 'nosotros')->first();

        Menu::create(['nombre' => 'Inicio', 'slug' => 'inicio', 'url' => '/', 'orden' => 1]);
        Menu::create(['nombre' => 'Martin Caicho', 'slug' => 'martin-caicho', 'url' => '/martin-caicho', 'orden' => 2]);
        Menu::create(['nombre' => 'Noticias', 'slug' => 'noticias', 'url' => '/noticias', 'orden' => 3]);
        Menu::create(['nombre' => 'Contacto', 'slug' => 'contacto', 'url' => '/contacto', 'orden' => 4]);
    }
}
