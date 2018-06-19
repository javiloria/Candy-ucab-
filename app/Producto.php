<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	//definiendo los atributos actualizables
  	protected $fillable= ['p_nombre','p_tipo','p_cantidad','p_precio','p_descripcion','p_imagen'];
  	//definiendo a que tabla se refiere este modelo
	protected $table = 'producto';
	//definiendo la clave primaria
	protected $primaryKey = 'p_cod';
}
