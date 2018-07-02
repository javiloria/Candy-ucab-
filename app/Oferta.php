<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'oferta';
	//definiendo la clave primaria
	protected $primaryKey = 'o_id';

	public $timestamps = false;
	
	/**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
		public function getRouteKeyName()
		{
		    return 'o_id';
		}
}
