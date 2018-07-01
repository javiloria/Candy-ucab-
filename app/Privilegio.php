<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
   	//definiendo los atributos actualizables
  	protected $fillable= ['p_nombre'];
  	//definiendo la clave primaria
protected $primaryKey = 'p_cod';
  	//definiendo a que tabla se refiere este modelo
	protected $table = 'privilegio';
	
  //definiendo que no se guarde la fecha de creacion y actualizacion
  public $timestamps = false;

}
