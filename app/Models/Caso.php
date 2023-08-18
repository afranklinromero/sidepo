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
		'asignado' => 'required',
		'regional' => 'required',
		'lugar' => 'required',
		
		'fecha_denuncia' => 'required',
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
    protected $fillable = ['caso','fechahecho','placa','vehiculo','marca','clase','color','modelo','chasis','hecho','nombre','apaterno','amaterno','estado','grupo_designado','asignado','regional','lugar','fechahecho','ci','detalle','id_user'];


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


	public function seguimientos()
	{
		return $this->hasMany(Seguimiento::class, 'id_caso');
	}






	public function scopeCaso($query, $caso)
	{
		if($caso)
			return $query->where('caso', 'LIKE', "%$caso%");
			
	}
	public function scopeNombre($query, $nombre)
	{
		if($nombre)
			return $query->where('nombre', 'LIKE', "%$nombre%");
			
	}
	public function scopeApaterno($query, $apaterno)
	{
		if($apaterno)
			return $query->where('apaterno', 'LIKE', "%$apaterno%");
			
	}
	public function scopeGrupo_designado($query, $grupo_designado)
	{
		if($grupo_designado)
			return $query->where('grupo_designado', 'LIKE', "%$grupo_designado%");
			
	}
	public function scopeLugar($query, $lugar)
	{
		if($lugar)
			return $query->where('lugar', 'LIKE', "%$lugar%");
			
	}
	public function scopeCi($query, $ci)
	{
		if($ci)
			return $query->where('ci', 'LIKE', "%$ci%");
			
	}
	public function scopeMarca($query, $marca)
	{
		if($marca)
			return $query->where('marca', 'LIKE', "%$marca%");
			
	}
	public function scopefecha_denuncia($query, $fecha_denuncia)
	{
		if($fecha_denuncia)
			return $query->where('fecha_denuncia', 'LIKE', "%$fecha_denuncia%");
			
	}
	public function scopePlaca($query, $placa)
	{
		if($placa)
			return $query->where('placa', 'LIKE', "%$placa%");
			
	}
	public function scopeVehiculo($query, $vehiculo)
	{
		if($vehiculo)
			return $query->where('vehiculo', 'LIKE', "%$vehiculo%");
			
	}
	public function scopeTipo($query, $tipo)
	{
		if($tipo)
			return $query->where('tipo', 'LIKE', "%$tipo%");
			
	}
	public function scopeColor($query, $color)
	{
		if($color)
			return $query->where('color', 'LIKE', "%$color%");
			
	}
	public function scopeModelo($query, $modelo)
	{
		if($modelo)
			return $query->where('modelo', 'LIKE', "%$modelo%");
			
	}
	public function scopeChasis($query, $chasis)
	{
		if($chasis)
			return $query->where('chasis', 'LIKE', "%$chasis%");
			
	}
	public function scopeHecho($query, $hecho)
	{
		if($hecho)
			return $query->where('hecho', 'LIKE', "%$hecho%");
			
	}
	public function scopeAmaterno($query, $amaterno)
	{
		if($amaterno)
			return $query->where('amaterno', 'LIKE', "%$amaterno%");
			
	}
	public function scopeEstado($query, $estado)
	{
		if($estado)
			return $query->where('estado', 'LIKE', "%$estado%");
			
	}
	public function scopeAsignado($query, $asignado)
	{
		if($asignado)
			return $query->where('asignado', 'LIKE', "%$asignado%");
			
	}
	public function scopeRegional($query, $regional)
	{
		if($regional)
			return $query->where('regional', 'LIKE', "%$regional%");
			
	}	
	public function scopeFechahecho($query, $fechahecho)
	{ 
	if($fechahecho)
			return $query->where('fechahecho', 'LIKE', "%$fechahecho%");
			
	}	
	


}
