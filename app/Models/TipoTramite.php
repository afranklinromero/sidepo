<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoTramite
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $activo
 * @property $created_at
 * @property $updated_at
 *
 * @property Valorada[] $valoradas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoTramite extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion', 'activo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valoradas()
    {
        return $this->hasMany(\App\Models\Valorada::class, 'id', 'tipo_tramite_id');
    }
    
}
