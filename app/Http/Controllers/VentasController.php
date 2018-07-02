<?php

namespace CandyUcab\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use CandyUcab\Pedido;
use CandyUcab\Ped_sta;
use CandyUcab\Tienda;
use CandyUcab\Producto;

class VentasController extends Controller
{
    
    public function iniciarventaview(){

    	$tiendas=  Tienda::all();
		return view('ventas.iniciarventa',compact('tiendas'));
    }

    public function iniciarventa(Request $request){
    	$tienda=$request->tienda;
    	$producto=Producto::all();
    	return view('ventas.facturacion',compact('tienda','producto'));
    }

  public function facturacion(Request $request){

    //

  }   

public function pagarpunto(Request $request){
        $tiendas=DB::table('tienda')->where('t_tipotamano', 'Candy Shop - virtual')->get();
        $string=json_encode($tiendas[0]);
        $porciones = explode(":", $string);
        $porciones2 = explode("}", $porciones[1]);
        $porciones3 = explode(",", $porciones2[0]);
        $tienda= intval($porciones3[0]);

        $pedido= new Pedido();
        $pedido->p_nombre   =$request->input('nombre');
        $pedido->p_tipo     ="compra pagada con puntos";
        $pedido->fk_usuario =Auth::user()->u_username;
        //tienda virtual
        $pedido->fk_tienda=$tienda;
        $pedido->save();

        //llenando la n a n
        $ped_sta= new Ped_sta();
          $ped_sta->fk_pedido =$request->input('nombre');
          $ped_sta->fk_status =2;
          $ped_sta->save();
        $username= Auth::user()->u_username;
         DB::table('punto')->where('fk_usuario',$username )->where('pu_valor',$request->punto)->delete();

        
        $pedido= DB::table('pedido')->where('fk_usuario', $username)->get();
       
        //le paso a la vista todos los pedidos enla BD
      return view ('Pedido.pedido-index',compact('pedido'));

    }


     public function viewpagarpunto(){
        $username=Auth::user()->u_username;
        $punto= DB::select(DB::raw("SELECT p.pu_valor as valor from punto p, usuario u where p.fk_usuario='$username'"));
        
        return view('metodosdepago.punto',compact('punto'));
    }




}
