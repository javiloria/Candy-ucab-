<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Punto extends Model
{
    protected $table = 'punto';
	//definiendo la clave primaria
	protected $primaryKey = 'pu_cod';

	public $timestamps = false;

	protected $fillable = ['pu_valor', 'pu_descripcion'];
	/**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
		public function getRouteKeyName()
		{
		    return 'fk_usuario';
		}
}
