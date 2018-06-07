<?php

namespace CandyUcab\Http\Controllers;

use Illuminate\Http\Request;
use CandyUcab\Tienda;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tiendas=  Tienda::all();

        return view ('tienda.tiendas-index',compact('tiendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //formulario de creacion
      return view('tienda.tiendas-create');
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
        if($request->hasFile('t_imagen'))  {

            //convirtiendo en archivo la direccion
          $file=$request->file('t_imagen');
            //garantizando que sea un nombre unico
          $name=time().$file->getClientOriginalName();
          //moviendo archivo a la app
          $file->move(public_path().'/insertado/tienda',$name);
        }

        else {
            $name='tienda-1.jpg';
        }
        $tienda= new Tienda();
        //asignando valores pasado por el formulario
        $tienda->t_nombre=$request->input('t_nombre');
        $tienda->t_tipotamano=$request->input('t_tipotamano');
        $tienda->fk_lugar=$request->input('fk_lugar');
        //guardando direccion de la imagen
        $tienda->t_imagen=$name;
        //guardando en la BD
        $tienda->save();
        //ver si esto se puede acomodar
        $tiendas=  Tienda::all();
        //le paso a la vista todos los productos enla BD
        return view ('tienda.tiendas-index',compact('tiendas'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tienda $tienda)
    {
      /*le estamos pasando por la url un modelo por lo que se lo pasamos a la nueva vista*/
        return view('tienda.tiendas-show', compact('tienda'));
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
