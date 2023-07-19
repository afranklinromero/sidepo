<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class ModelHasRole
 *
 * @property $role_id
 * @property $model_type
 * @property $model_id
 *
 * @property Role $role
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ModelHasRole extends Eloquent
{
    
    static $rules = [
		'role_id' => 'required',
		'model_type' => 'required',
		'model_id' => 'required',
    ];
    protected $primaryKey = 'model_id';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['role_id','model_type','model_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'role_id');
    }
    

}
