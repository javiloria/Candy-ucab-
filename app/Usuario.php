<?php

namespace CandyUcab;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Usuario  extends Authenticatable
{
	use Notifiable;
	//definiendo que tabla se refierfe este modelo
protected $table = 'usuario';
//definiendo el nombre del codigo de este modelo
	protected $primaryKey = "u_username";
//como la clave primaria es alfanumerica se debe coloar para que llene bien la N a N
public $incrementing = false;

protected $fillable = [
         'u_username'
    ];

    protected $hidden = [
        'u_password',
    ];

	public function roles()
{
	//definiendo que iene una relacion N a N para que se llene sola
	return $this
			->belongsToMany('CandyUcab\Role', 'role_usuario', 'u_username', 'role_id')
			->withTimestamps();
}

public function authorizeRoles($roles)
{
	if ($this->hasAnyRole($roles)) {
			return true;
	}
	abort(401, 'Esta acción no está autorizada.');
}

public function hasAnyRole($roles)
{
	if (is_array($roles)) {
			foreach ($roles as $role) {
					if ($this->hasRole($role)) {
							return true;
					}
			}
	} else {
			if ($this->hasRole($roles)) {
					return true;
			}
	}
	return false;
}

public function hasRole($role)
{
	if ($this->roles()->where('name', $role)->first()) {
			return true;
	}
	return false;
}

public function getAuthPassword()
	 {
			 return $this->u_password;
	 }
}
