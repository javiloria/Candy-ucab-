<?php

namespace CandyUcab\Http\Controllers;

use CandyUcab\Carnet;
use CandyUcab\Usuario;
use CandyUcab\ClienteNatural;
use CandyUcab\ClienteJuridico;
use Illuminate\Http\Request;

class ClienteTiendaController extends Controller
{

		 public function Vista(){
		 	$carnets = Carnet::all();
		 	return view('carnet.vista-carnet', compact('carnets'));
		 }

		 public function Registro(Request $request){

		 	$clientenatural = \DB::table('clientenatural')->where('fk_usuario', $request->input('u_username'))->get();
		 	foreach ($clientenatural as $cn);

		 	$tienda = \DB::table('tienda')->where('t_nombre', $request->input('t_nombre'))->get();
		 	foreach ($tienda as $td);

			$carnet = new Carnet();
			$carnet->c_nombre = $cn->c_n_pnombre;
			$carnet->c_apellido = $cn->c_n_papellido;
			$carnet->fk_clientenatural = $cn->c_n_rif;
			$carnet->save();

		 	$clientenatural = \DB::table('clientenatural')->where('fk_usuario', $request->input('u_username'))->update(['fk_tienda' => $td->t_cod]);

			return view('carnet.carnet-usuario', compact('carnet'));
		 }

		 public function Usuario($id){
		 	 $carnet = Carnet::find($id);
		 	 return view('carnet.vista-carnet', compact('carnet'));
		 }
}
