<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMensaje extends Model
{
    /** @use HasFactory<\Database\Factories\TipoMensajeFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre', 'activo',
    ];

    public function mensajes()
    {
        return $this->hasMany(Mensaje::class);
    }

}
