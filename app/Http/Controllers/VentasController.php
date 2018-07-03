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
        
        $pedidos = \DB::select(DB::raw("SELECT p_nombre from Pedido"));


        for($i = 0; $i < count($pedidos); $i++){
             if($i == count($pedidos)-1)
                $pedido = $pedidos[$i]->p_nombre;
        } 

        $pedidos = 
        \DB::table('pedido')->where('p_nombre', $pedido)->update(['p_tipo' => "compra debito"]);

        //llenando la n a n
        $ped_sta= new Ped_sta();
          $ped_sta->fk_pedido =$pedido;
          $ped_sta->fk_status =2;
          $ped_sta->save();
        $username= Auth::user()->u_username;

         $nuevo=$request->total-$request->punto;
         \DB::table('punto')->where('fk_usuario',"<=",$username )->update(['pu_valor' => $nuevo]);

        
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
