<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloqueUno extends Model
{
    /** @use HasFactory<\Database\Factories\BloqueUnoFactory> */
    use HasFactory;

    protected $table = 'bloque_unos';

    protected $fillable = [
        'titulo',
        'titulo_descripcion',
        'imagen',
        'imagen_seo',
        'subtitulo',
        'subtitulo_descripcion',
        'lista',
        'boton',
    ];

    protected $casts = [
        'lista' => 'array',
        'boton' => 'array',
    ];
}
