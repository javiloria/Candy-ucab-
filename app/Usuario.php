<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //definiendo que tabla se refierfe este modelo
	protected $table = 'usuario';
	//definiendo el nombre del codigo de este modelo
    protected $primaryKey = "u_username";
    //definiendo que no se guarde la fecha de creacion y actualizacion
    public $timestamps = false;
}
