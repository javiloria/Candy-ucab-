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
    public function create(Request $request)
    {
      $request->user()->authorizeRoles(['admin']);
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
      $request->user()->authorizeRoles(['admin']);
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
    public function edit(Request $request,Tienda $tienda)
    {
      $request->user()->authorizeRoles(['admin']);
      /*le estamos pasando por la url un modelo por lo que se lo pasamos a la nueva vista*/
        return view('tienda.tiendas-edit', compact('tienda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Tienda $tienda)
    {
      $request->user()->authorizeRoles(['admin']);
      $tienda->fill($request->except('t_imagen'));
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
      //guardando direccion de la imagen
      $tienda->t_imagen=$name;
      //guadando en la BD
      $tienda->save();
      $tiendas=  Tienda::all();
      //le paso a la vista todos los productos enla BD
      return view ('tienda.tiendas-index',compact('tiendas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Tienda $tienda)
    {
        $request->user()->authorizeRoles(['admin']);
        //verificando que no sea la imagen predeterminada
        if($tienda->t_imagen != 'tienda-1.jpg'){
          //defiiendo la ruta de las imagenes para borrarla
          $file_path=public_path().'/insertado/tienda/'.$tienda->t_imagen;
          //borrando la imagen
          \File::delete($file_path);
        }
        //borrando los datos
      $tienda->delete();
      //devolver la vista index
      $tiendas=  Tienda::all();
      //le paso a la vista todos los productos enla BD
      return view ('tienda.tiendas-index',compact('tiendas'));
    }

}
