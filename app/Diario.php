<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Diario extends Model
{
     protected $table = 'diario';
	//definiendo la clave primaria
	protected $primaryKey = 'd_cod';

	public $timestamps = false;
	
}
