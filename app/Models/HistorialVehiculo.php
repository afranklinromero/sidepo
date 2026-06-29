<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistorialVehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehiculo_id',
        'solicitud_tramite_id',
        'tipo_evento',
        'descripcion',
        'user_id',
    ];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }

    public function solicitudTramite()
    {
        return $this->belongsTo(SolicitudTramite::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
