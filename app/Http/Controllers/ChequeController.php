<?php

namespace CandyUcab\Http\Controllers;

use Illuminate\Http\Request;
use CandyUcab\Cheque;
use CandyUcab\Pedido;
use CandyUcab\Ped_sta;
use Auth;
use Illuminate\Support\Facades\DB;
class ChequeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //formulario de creacion
        return view('metodosdepago.create-cheque');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cheque= new Cheque();
        $cheque->mp_numero      = $request->input('numero');
        $cheque->mp_efectivo    = $request->input('efectivo');
        $cheque->mp_ch_cuenta   = $request->input('cuenta');
        $cheque->mp_ch_banco    = $request->input('banco');
        $cheque->save();

        $tiendas=DB::table('tienda')->where('t_tipotamano', 'Candy Shop - virtual')->get();
        $string=json_encode($tiendas[0]);
        $porciones = explode(":", $string);
        $porciones2 = explode("}", $porciones[1]);
        $porciones3 = explode(",", $porciones2[0]);
        $tienda= intval($porciones3[0]);

        $pedido= new Pedido();
        $pedido->p_nombre   =$request->input('nombre');
        $pedido->p_tipo     ="compra natural";
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
        $pedido= DB::table('pedido')->where('fk_usuario', $username)->get();
        //le paso a la vista todos los productos enla BD
      return view ('Pedido.pedido-index',compact('pedido'));

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
