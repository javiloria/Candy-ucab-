<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
       //definiendo que tabla se refierfe este modelo
protected $table = 'pedido';
//definiendo la clave primaria
protected $primaryKey = 'p_nombre';
//defininedo que no guarde fecha de creacion y actualizacion en la BD
public $timestamps = false;
//como la clave primaria es alfanumerica se debe coloar para que llene bien la N a N
public $incrementing = false;

}
