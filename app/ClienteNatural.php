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
}
