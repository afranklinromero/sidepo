<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
