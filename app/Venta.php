<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
   //definiendo que tabla se refierfe este modelo
	protected $table = 'venta';
	//definiendo la clave primaria
	protected $primaryKey = 'v_numerofac';
	//defininedo que no guarde fecha de creacion y actualizacion en la BD
	public $timestamps = false;
}
