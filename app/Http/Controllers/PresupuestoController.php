<?php

namespace CandyUcab\Http\Controllers;

use Illuminate\Http\Request;
use CandyUcab\Presupuesto;
use CandyUcab\Pro_Pre;
use CandyUcab\Pedido;
use CandyUcab\Producto;
use Illuminate\Support\Facades\DB;
use Auth;
class PresupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $presupuesto=  DB::table('pro_pre')->where('pp_username', Auth::user()->u_username)->get();
      //le paso a la vista todos los productos enla BD
      return view ('presupuesto.carrito',compact('presupuesto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $pro_pre= new Pro_Pre();
      $montototal=0;  $ppcantidad=0;
      foreach ($request->carrito as $producto)  {
      $product = \DB::table('producto')->where('p_cod', $producto)->get();

      //calcula el monto total del presupuesto
        foreach($product as $precio)
          $montototal=$montototal+$precio->p_precio;
          $ppcantidad=$ppcantidad+1;
    }

    $presupuesto= new Presupuesto();
    $presupuesto->p_monto=$montototal;
      //guardamos en la BD
      $presupuesto->save();

    $tiendas=DB::table('tienda')->where('t_tipotamano', 'Candy Shop - virtual')->get();
        $string=json_encode($tiendas[0]);
        $porciones = explode(":", $string);
        $porciones2 = explode("}", $porciones[1]);
        $porciones3 = explode(",", $porciones2[0]);
        $tienda= intval($porciones3[0]);

        $pedido = new Pedido();
        $pedido->p_nombre = 'pedido'.time();
        $pedido->fk_usuario =Auth::user()->u_username;  
        $pedido->fk_presupuesto = $presupuesto->p_cod;
        $pedido->fk_tienda=$tienda;
        $pedido->save();

$pres =DB::select(DB::raw("SELECT p_cod from Presupuesto where p_monto =$montototal order by p_cod desc limit 1;"));

$string=json_encode($pres[0]);
$porciones = explode(":", $string);
$porciones2 = explode("}", $porciones[1]);
$numero= intval($porciones2[0]);
foreach ($request->carrito as $producto)  {
$product = \DB::table('producto')->where('p_cod', $producto)->get();

foreach($product as $precio2){
  //echo $precio2->p_cod;
  $pro_pre= new Pro_Pre();
$pro_pre->fk_prod_cod=$precio2->p_cod;
$pro_pre->pp_cantidad= $ppcantidad;
$pro_pre->pp_username=Auth::user()->u_username ;
$pro_pre->fk_pre_cod =$numero;

$pro_pre->save();
}
}
      $username=Auth::user()->u_username;
      $producto=  Producto::all();
      $pro_pre= DB::table('pro_pre')->where('pp_username', $username)->get();
      //le paso a la vista todos los productos enla BD
      return view ('producto.productos-index',compact('producto','pro_pre'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
