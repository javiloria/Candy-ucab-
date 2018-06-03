<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//definiendo ubicacon del modelo
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //get, mostrar
    public function index()
    {

      $producto=  Producto::all();
      //le paso a la vista todos los productos enla BD
      return view ('producto.productos-index',compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //formulario de creacion
        return view('producto.producto-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //instancia de modelo Producto
      $producto= new Producto();
      //asignando valores pasado por el formulario
      $producto->p_cod=$request->input('P_cod');
      $producto->p_nombre=$request->input('P_nombre');
      $producto->p_tipo=$request->input('P_tipo');
      $producto->p_precio=$request->input('P_precio');
      //guardando en la BD
      $producto->save();
      //ver si esto se puede acomodar
      $producto=  Producto::all();
      //le paso a la vista todos los productos enla BD
      return view ('producto.productos-index',compact('producto'));
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
