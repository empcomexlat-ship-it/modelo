<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    /** @use HasFactory<\Database\Factories\PaginaFactory> */
    use HasFactory;

    protected $fillable = [
        'titulo', 'slug', 'contenido', 'imagen', 'mostrar_en_menu', 'orden', 'estado'
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function imagenes()
    {
        return $this->morphMany(Imagen::class, 'imagenable');
    }
}
