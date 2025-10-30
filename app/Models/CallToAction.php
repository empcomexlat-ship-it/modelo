<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallToAction extends Model
{
    /** @use HasFactory<\Database\Factories\CallToActionFactory> */
    use HasFactory;

    protected $table = 'call_to_actions';

    protected $fillable = [
        'titulo',
        'subtitulo',
        'imagen',
        'imagen_seo',
        'boton',
    ];

    protected $casts = [
        'boton' => 'array', // convierte automáticamente JSON a array
    ];
}
