<?php

namespace CandyUcab\Http\Controllers;

use Auth;
use CandyUcab\Producto;
use CandyUcab\Diario;
use CandyUcab\Descuento;
use CandyUcab\Oferta;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas = Oferta::all();
         //$username= Auth::user()->u_username;
        //return $username;
        return view('oferta.vista-oferta', compact('ofertas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('oferta.create-oferta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $diario = new Diario();
        $diario->d_descripcion = $request->d_descripcion;
        $diario->d_fec_inicio = $request->d_fecini;
        $diario->d_fecha_fin = $request->d_fecfin;
        $diario->fk_empleado = $request->fk_empleado;
        $diario->save();

        for($index=0; $index< count($request->nombre) || $index< count($request->descripcion) || $index< count($request->porcentaje);  $index++){
    
    $productos = \DB::table('producto')->where('p_nombre', $request->nombre[$index])->get();
    foreach ($productos as $producto);

        $oferta = new Oferta();
        $oferta->o_descripcion = $request->descripcion[$index];
        $oferta->o_producto = $producto->p_cod;
        $oferta->o_diario = $diario->d_cod;
        
        $descuento = 
            $producto->p_precio-($producto->p_precio*$request->porcentaje[$index])/100;
        $oferta->o_precio = $descuento;
        
        $oferta->save();

        $descuento = new Descuento();
        $descuento->d_porcentaje = $request->porcentaje[$index];
        $descuento->fk_oferta1 = $oferta->o_id;
        $descuento->fk_oferta2 = $producto->p_cod;
        $descuento->fk_oferta3 = $oferta->o_diario;
        $descuento->save();

        } 

        $ofertas = Oferta::all();
        return view('oferta.vista-oferta', compact('ofertas'));
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
        $oferta = Oferta::find($id);
       return view('oferta.edit-oferta', compact('oferta'));
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
        $oferta = Oferta::find($id);
        $oferta->o_descripcion = $request->input('o_descripcion');

        $descuentos = 
        \DB::table('descuento')->where('fk_oferta1', $oferta->o_id)->get();
        foreach ($descuentos as $descuento);

        $oferta->o_precio = 
        $oferta->o_precio*100/(100-($descuento->d_porcentaje))*(100-$request->input('o_porcentaje'))/100;

        $descuento->d_porcentaje = $request->input('o_porcentaje');

        $descuentos = 
        \DB::table('descuento')
        ->where('fk_oferta1', $oferta->o_id)->update(['d_porcentaje' => $request->input('o_porcentaje')]);

        $oferta->save();   

        $ofertas = Oferta::all();
        return view('oferta.vista-oferta', compact('ofertas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oferta = Oferta::find($id);
        $descuentos = 
        \DB::table('descuento')->where('fk_oferta1', $oferta->o_id)->delete();
        $oferta->delete();

        $ofertas = Oferta::all();
        return view('oferta.vista-oferta', compact('ofertas'));
    }
}
