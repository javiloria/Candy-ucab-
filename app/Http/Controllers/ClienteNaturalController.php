<?php

namespace App\Http\Controllers;

use App\ClienteNatural;
use App\Telefono;
use App\Usuario;
use Illuminate\Http\Request;

class ClienteNaturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientenatural = ClienteNatural::all();
        $usuarios = Usuario::all();

        return view('clientenatural.index-natural', compact('clientenatural'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientenatural.registro-natural');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientenatural = new ClienteNatural();
        $clientenatural->c_n_rif = $request->input('c_n_rif');
        $clientenatural->c_n_cedula = $request->input('c_n_cedula');
        $clientenatural->c_n_pnombre = $request->input('c_n_pnombre');
        $clientenatural->c_n_snombre = $request->input('c_n_snombre');
        $clientenatural->c_n_papellido = $request->input('c_n_papellido');
        $clientenatural->c_n_sapellido = $request->input('c_n_sapellido');
        $clientenatural->c_n_correo = $request->input('c_n_correo');
        $clientenatural->fk_lugar = $request->input('fk_lugar');

        $telefono = new Telefono();
        $telefono->t_numero = $request->input('t_numero');
        $telefono->fk_clientenatural = $request->input('c_n_rif');

        $usuario = new Usuario();
        $usuario->u_username = $request->input('u_username');
        $usuario->u_password = $request->input('u_password');
        $usuario->fk_clienat = $request->input('c_n_rif');

        $clientenatural->save();
        $telefono->save();
        $usuario->save();

        return 'Saved';
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