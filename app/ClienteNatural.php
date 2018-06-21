<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class ClienteNatural extends Model
{
    //definiendo que tabla se refierfe este modelo
	protected $table = 'clientenatural';
	//definiendo el nombre del codigo de este modelo
    protected $primaryKey = "c_n_rif";
    //definiendo que no se guarde la fecha de creacion y actualizacion
    public $timestamps = false;

   protected $fillable = ['c_n_pnombre', 'c_n_snombre', 'c_n_papellido', 'c_n_sapellido', 'c_n_correo', 'c_n_avatar'];

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
