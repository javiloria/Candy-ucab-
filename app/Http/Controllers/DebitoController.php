<?php

namespace CandyUcab\Http\Controllers;

    use Illuminate\Http\Request;
    use CandyUcab\Pedido;
    use CandyUcab\Venta;
    use CandyUcab\Pago;
    use CandyUcab\Debito;
    use CandyUcab\Ped_sta;
    use Auth;
    use Illuminate\Support\Facades\DB;
class DebitoController extends Controller
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
        return view('metodosdepago.debito');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $debito= new Debito();
        $debito->mp_numero      = $request->input('numero');
        $debito->mp_efectivo    = $request->input('efectivo');
        $debito->mp_d_tipo   = $request->input('cuenta');
        $debito->mp_d_banco    = $request->input('banco');
        $debito->save();

        $pedidos = \DB::select(DB::raw("SELECT p_nombre, fk_presupuesto from Pedido"));


        for($i = 0; $i < count($pedidos); $i++){
             if($i == count($pedidos)-1){
                $pedido = $pedidos[$i]->p_nombre;
                $presupuesto = $pedidos[$i]->fk_presupuesto;
             }
        } 

        $presupuestos = \DB::table('presupuesto')->where('p_cod', $presupuesto)->get();
        foreach ($presupuestos as $pre);

        $pedidos = 
        \DB::table('pedido')->where('p_nombre', $pedido)->update(['p_tipo' => "compra debito"]);

        //llenando la n a n
        $ped_sta= new Ped_sta();
          $ped_sta->fk_pedido =$pedido;
          $ped_sta->fk_status =2;
          $ped_sta->save();
        $username= Auth::user()->u_username;

        $venta = new Venta();
        $venta->v_fechafac = $request->input('fechaact');
        $venta->fk_pedido = $pedido;
        $venta->fk_presupuesto = $presupuesto;
        $venta->save();

        $pago = new Pago();
        $pago->p_monto = $pre->p_monto;
        $pago->p_fechapago = $request->input('fechaact');
        $pago->fk_pedido = $pedido;
        $pago->fk_debito = $debito->mp_cod;
        $pago->save();

        $pedido= DB::table('pedido')->where('fk_usuario', $username)->get();
        //le paso a la vista todos los pedidos enla BD
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
