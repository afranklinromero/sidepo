<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Valorada extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'departamento_id',
        'municipio_id',
        'tipo_tramite_id',
        'estado',
        'user_id',
         'fecha_utilizacion',
         'observacion',
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function tipoTramite()
    {
        return $this->belongsTo(TipoTramite::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function solicitud()
    {
        return $this->hasOne(SolicitudTramite::class);
    }
}