<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class ClienteJuridico extends Model
{
     //definiendo que tabla se refierfe este modelo
	protected $table = 'clientejuridico';
	//definiendo el nombre del codigo de este modelo
    protected $primaryKey = "c_j_rif";
    //definiendo que no se guarde la fecha de creacion y actualizacion
    public $timestamps = false;

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
