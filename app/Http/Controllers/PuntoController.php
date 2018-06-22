<?php

namespace CandyUcab\Http\Controllers;

use CandyUcab\Punto;
use Illuminate\Http\Request;

class PuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puntos = Punto::all();
        return view('punto.vista-punto', compact('puntos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('punto.creacion-punto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $punto = new Punto();

        $punto->pu_valor = $request->input('pu_valor');
        $punto->pu_descripcion = $request->input('pu_descripcion');
        $punto->fk_usuario = $request->input('fk_usuario');
        $punto->save();


        $puntos = Punto::all();
        return view('punto.vista-punto', compact('puntos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Punto $punto)
    {
        return view('punto.usuario-punto', compact('punto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Punto $punto)
    {
        return view('punto.cambio-punto', compact('punto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Punto $punto)
    {

        $punto->pu_valor = $request->input('pu_valor');
        $punto->pu_descripcion = $request->input('pu_descripcion');
        $punto->save();

        $puntos = Punto::all();
        return view('punto.vista-punto', compact('puntos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Punto $punto)
    {
        $punto->delete();
        $puntos = Punto::all();
        return view('punto.vista-punto', compact('puntos'));
    }
}
