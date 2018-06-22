<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'oferta';
	//definiendo la clave primaria
	protected $primaryKey = 'o_id';

	public $timestamps = false;
	
}
