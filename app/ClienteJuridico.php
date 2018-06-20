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

    protected $fillable = ['c_j_razonsocial','c_j_dcomercial', 'c_j_capital', 'c_j_correo' ,'c_j_sitioweb','c_j_avatar']; 

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
