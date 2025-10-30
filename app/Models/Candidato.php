<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    /** @use HasFactory<\Database\Factories\CandidatoFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
        'slug',
        'frase',
        'partido_politico',
        'imagen_principal',
        'descripcion_corta',
        'biografia',
        'facebook',
        'instagram',
        'tiktok',
        'youtube',
        'estado'
    ];

    public function noticias()
    {
        return $this->hasMany(Noticia::class);
    }
}
