<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa',
        'chasis',
        'motor',
        'marca',
        'modelo',
        'color',
        'observaciones',
    ];
    public function solicitudes()
{
    return $this->hasMany(SolicitudTramite::class);
}

public function historial()
{
    return $this->hasMany(HistorialVehiculo::class);
}
}


