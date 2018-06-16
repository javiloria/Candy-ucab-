<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    //definiendo que tabla se refierfe este modelo
	protected $table = 'telefono';
	//definiendo el nombre del codigo de este modelo
    protected $primaryKey = "t_id";
    //definiendo que no se guarde la fecha de creacion y actualizacion
    public $timestamps = false;
}
