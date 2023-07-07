<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Caso
 *
 * @property $id
 * @property $caso
 * @property $fecha
 * @property $placa
 * @property $vehiculo
 * @property $marca
 * @property $clase
 * @property $color
 * @property $modelo
 * @property $chasis
 * @property $hecho
 * @property $nombre
 * @property $apaterno
 * @property $amaterno
 * @property $estado
 * @property $grupo_designado
 * @property $designado
 * @property $regional
 * @property $lugar
 * @property $mes
 * @property $ano
 * @property $ci
 * @property $id_user
 * @property $created_at
 * @property $updated_at
 * @property $archivo
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Caso extends Model
{
    
    static $rules = [
		'caso' => 'required',
		'fecha' => 'required',
		'placa' => 'required',
		'vehiculo' => 'required',
		'marca' => 'required',
		'clase' => 'required',
		'color' => 'required',
		'modelo' => 'required',
		'chasis' => 'required',
		'hecho' => 'required',
		'nombre' => 'required',
		'apaterno' => 'required',
		'amaterno' => 'required',
		'estado' => 'required',
		'grupo_designado' => 'required',
		'designado' => 'required',
		'regional' => 'required',
		'lugar' => 'required',
		'mes' => 'required',
		'ano' => 'required',
		'ci' => 'required',
		'id_user' => 'required',
		'archivo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['caso','fecha','placa','vehiculo','marca','clase','color','modelo','chasis','hecho','nombre','apaterno','amaterno','estado','grupo_designado','designado','regional','lugar','mes','ano','ci','id_user'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class);
		
    }
	public function archivo()
    {
        return $this->hasMany(Archivo::class);
		
    }
	public function archivodenuncia()
    {
        return $this->hasMany(Archivodenuncia::class);
		
    }

	public function departamento()
    {
        return $this->hasOne(Departamento::class);
    }

}
