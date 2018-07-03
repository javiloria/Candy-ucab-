<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
	//definiendo que tabla se refierfe este modelo
	protected $table = 'pago';
	//definiendo la clave primaria
	protected $primaryKey = 'p_cod';
	//defininedo que no guarde fecha de creacion y actualizacion en la BD
	public $timestamps = false;
}
