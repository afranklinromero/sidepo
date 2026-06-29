<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'solicitud_tramite_id',
        'fecha',
        'turno',
        'numero_ficha',
        'estado',
    ];

    public function solicitudTramite()
    {
        return $this->belongsTo(SolicitudTramite::class);
    }
}
