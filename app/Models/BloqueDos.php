<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloqueDos extends Model
{
    /** @use HasFactory<\Database\Factories\BloqueDosFactory> */
    use HasFactory;

    protected $table = 'bloque_dos';

    protected $fillable = [
        'titulo',
        'titulo_descripcion',
        'lista',
    ];

    protected $casts = [
        'lista' => 'array', // ← convierte automáticamente el JSON a array
    ];
}
