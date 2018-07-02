<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    protected $table = 'descuento';
	//definiendo la clave primaria
	protected $primaryKey = 'd_cod';

	public $timestamps = false;
}
