<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Punto extends Model
{
    protected $table = 'punto';
	//definiendo la clave primaria
	protected $primaryKey = 'pu_cod';

	public $timestamps = false;
}
