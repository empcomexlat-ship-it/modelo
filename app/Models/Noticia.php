<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    /** @use HasFactory<\Database\Factories\NoticiaFactory> */
    use HasFactory;

    protected $fillable = [
        'candidato_id', 'titulo', 'slug', 'contenido', 'imagen', 'publicado_en', 'estado', 'meta_title',
        'meta_description', 'views'];

    public function candidato()
    {
        return $this->belongsTo(Candidato::class);
    }

    public function imagenes()
    {
        return $this->morphMany(Imagen::class, 'imagenable');
    }
}
