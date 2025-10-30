<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    /** @use HasFactory<\Database\Factories\MensajeFactory> */
    use HasFactory;

    protected $fillable = [
        'tipo_mensaje_id', 'nombre', 'apellido', 'email', 'telefono', 'asunto', 'mensaje', 'leido',
    ];

    public function tipo()
    {
        return $this->belongsTo(TipoMensaje::class, 'tipo_mensaje_id');
    }
}
