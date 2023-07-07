<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Archivodenuncia
 *
 * @property $id
 * @property $tipo
 * @property $pdf
 * @property $created_at
 * @property $updated_at
 * @property $id_caso
 *
 * @property Caso $caso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Archivodenuncia extends Model
{
    
    static $rules = [
		'tipo' => 'required',
		'pdf' => 'required',
		'id_caso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo','pdf'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caso()
    {
        return $this->hasOne('App\Models\Caso', 'id', 'id_caso');
    }

}
