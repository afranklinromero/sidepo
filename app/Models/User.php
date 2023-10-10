<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable; 
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'name',
        'apellido',
        'grado',
        'grupo',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public static $rules = [
        'password' => 'required|string|min:6',
        'role' => 'required|string', // Agrega una regla de validación para 'role'
    ];
    public function setNombreAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
        $this->attributes['apellido'] = strtoupper($value);
        $this->attributes['grado'] = strtoupper($value);
        $this->attributes['grupo'] = strtoupper($value);
        
    }
    public function users()
    {
        return $this->hasMany(Registro::class);
        return $this->hasMany(Casos::class);
        return $this->hasMany(ModelHasRole::class);
        
    }

    public function scopeNombre($query, $name)
	{
		if($name)
			return $query->where('name', 'LIKE', "%$name%");
			
	}
	public function scopeApaterno($query, $apellido)
	{
		if($apellido)
			return $query->where('apellido', 'LIKE', "%$apellido%");
			
	}
}

