<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seguimiento
 *
 * @property $id
 * @property $estado
 * @property $usuario
 * @property $fecha
 * @property $observacion
 * @property $id_caso
 * @property $id_usuario
 * @property $created_at
 * @property $updated_at
 *
 * @property Caso $caso
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Seguimiento extends Model
{
    
    static $rules = [
		'estado' => 'required',
		'usuario' => 'required',
		'fecha' => 'required',
		'observacion' => 'required',
		'id_caso' => 'required',
		'id_usuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado','usuario','fecha','observacion','id_caso','id_usuario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caso()
    {
        return $this->belongsTo(Caso::class, 'id_caso');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_usuario');
    }
    
  


}
