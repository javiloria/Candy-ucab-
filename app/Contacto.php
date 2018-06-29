<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //definiendo que tabla se refierfe este modelo
	protected $table = 'contacto';
	//definiendo el nombre del codigo de este modelo
    protected $primaryKey = "co_id";
    //definiendo que no se guarde la fecha de creacion y actualizacion
    public $timestamps = false;
}
