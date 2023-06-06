<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registro
 *
 * @property $id
 * @property $id_user
 * @property $created_at
 * @property $updated_at
 * @property $tipo
 * @property $nombre
 * @property $apaterno
 * @property $amaterno
 * @property $ci
 * @property $placa
 * @property $chasis
 * @property $archivo
 * @property $alias
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registro extends Model
{
    
    static $rules = [
		'id_user' => 'required',
		'tipo' => 'required',
		'nombre' => 'required',
		'apaterno' => 'required',
		'amaterno' => 'required',
		'ci' => 'required',
		'placa' => 'required',
		'chasis' => 'required',
		'archivo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_user','tipo','nombre','apaterno','amaterno','ci','placa','chasis','archivo','alias'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
    

}
