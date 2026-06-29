<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SolicitudTramite extends Model
{
    use HasFactory;

    protected $fillable = [
        'valorada_id',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'ci',
        'telefono',
        'telefono_verificado_at',
        'estado',
    ];

    public function valorada()
    {
        return $this->belongsTo(Valorada::class);
    }
    
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

    public function vehiculo()
{
    return $this->belongsTo(Vehiculo::class);
}
public function documento()
{
    return $this->hasOne(DocumentoGenerado::class);
}
}