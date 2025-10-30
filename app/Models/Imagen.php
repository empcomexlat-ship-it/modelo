<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    /** @use HasFactory<\Database\Factories\ImagenFactory> */
    use HasFactory;

    protected $fillable = [
        'url', 'titulo', 'descripcion', 'imagenable_id', 'imagenable_type'
    ];

    public function imagenable()
    {
        return $this->morphTo();
    }
}
