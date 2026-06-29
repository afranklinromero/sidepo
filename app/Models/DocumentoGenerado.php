<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentoGenerado extends Model
{
    use HasFactory;

    protected $fillable = [
        'solicitud_tramite_id',
        'codigo_consulta',
        'archivo_pdf',
        'fecha_expiracion',
        'user_id',
    ];

    protected $casts = [
        'fecha_expiracion' => 'datetime',
    ];

    public function solicitudTramite()
    {
        return $this->belongsTo(SolicitudTramite::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
