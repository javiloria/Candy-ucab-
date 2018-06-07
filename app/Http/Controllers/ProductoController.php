<?php

namespace CandyUcab\Http\Controllers;

use Illuminate\Http\Request;
//definiendo ubicacon del modelo
use CandyUcab\Producto;

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
      //comprobando que lo enviado sea un archivo
        if($request->hasFile('p_imagen'))  {

            //convirtiendo en archivo la direccion
          $file=$request->file('p_imagen');
            //garantizando que sea un nombre unico
          $name=time().$file->getClientOriginalName();
          //moviendo archivo a la app
          $file->move(public_path().'/insertado/producto',$name);
        }
        //si no es archivoono manda nada colocamos la imagen por defecto
        else {
            $name='p1.jpg';
        }
      //instancia de modelo Producto
      $producto= new Producto();
      //asignando valores pasado por el formulario
      $producto->p_cod=$request->input('p_cod');
      $producto->p_nombre=$request->input('p_nombre');
      $producto->p_tipo=$request->input('p_tipo');
      $producto->p_precio=$request->input('p_precio');
      //guardando direccion de la imagen
      $producto->p_imagen=$name;
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
    public function show(Producto $producto)
    { /*le estamos pasando por la url un modelo por lo que se lo pasamos a la nueva vista
      http://127.0.0.1:8000/productos/120
      */

        return view('producto.productos-show',compact('producto'));
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
