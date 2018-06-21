<?php

namespace CandyUcab\Http\Controllers;

use CandyUcab\ClienteNatural;
use CandyUcab\Telefono;
use CandyUcab\Usuario;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use CandyUcab;
use CandyUcab\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ClienteNaturalController extends Controller
{
    public function index()
    {

        $clientesnaturales = ClienteNatural::all();

        return view('clientenatural.index-natural', compact('clientesnaturales'));
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

        if($request->hasFile('c_n_avatar')){
            $file = $request->file('c_n_avatar');
            $name = time().$file->getClientOriginalName();
            $clientenatural->c_n_avatar = $name;
            $file->move(public_path().'/images/', $name);
        }
        $tiendas=DB::table('tienda')->where('t_tipotamano', 'Candy Shop - virtual')->get();
        $string=json_encode($tiendas[0]);
        $porciones = explode(":", $string);
        $porciones2 = explode("}", $porciones[1]);
        $porciones3 = explode(",", $porciones2[0]);
        $tienda= intval($porciones3[0]);
        $clientenatural->c_n_rif = $request->input('c_n_rif');
        $clientenatural->c_n_cedula = $request->input('c_n_cedula');
        $clientenatural->c_n_pnombre = $request->input('c_n_pnombre');
        $clientenatural->c_n_snombre = $request->input('c_n_snombre');
        $clientenatural->c_n_papellido = $request->input('c_n_papellido');
        $clientenatural->c_n_sapellido = $request->input('c_n_sapellido');
        $clientenatural->c_n_correo = $request->input('c_n_correo');
        $clientenatural->fk_lugar = $request->input('fk_lugar');
        $clientenatural->fk_usuario = $request->input('u_username');
        $clientenatural->fk_tienda=$tienda;

/*
        $telefono = new Telefono();
        $telefono->t_numero = $request->input('t_numero');
        $telefono->fk_clientenatural = $request->input('c_n_rif');*/

        $usuario = new Usuario();
        $usuario->u_username = $request->input('u_username');
        $usuario->u_password = Hash::make($request->input('u_password'));
        $usuario
      ->roles()
      ->attach(Role::where('name', 'user')->first());

        $usuario->save();
        $clientenatural->save();

        foreach ($request->telefono as $cell) {
        $telefono = new Telefono();
        $telefono->t_numero = $cell;
        $telefono->fk_clientenatural = $request->input('c_n_rif');
        $telefono->save();
        }

        return View('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ClienteNatural $clientenatural)
    {
        return view('clientenatural.perfil-natural',compact('clientenatural'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ClienteNatural $clientenatural)
    {
        return view('clientenatural.editar-natural',compact('clientenatural'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ClienteNatural $clientenatural)
    {
        $clientenatural->fill($request->except('c_n_avatar'));

        if($request->hasFile('c_n_avatar')){
            $file = $request->file('c_n_avatar');
            $name = time().$file->getClientOriginalName();
            $clientenatural->c_n_avatar = $name;
            $file->move(public_path().'/images/', $name);
        }

        $clientenatural->save();

        $clientesnaturales = ClienteNatural::all();

        return view('clientenatural.index-natural', compact('clientesnaturales'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClienteNatural $clientenatural)
    {


        $telefonos = \DB::table('telefono')->where('fk_clientenatural', $clientenatural->c_n_rif)->delete();

        $file_path = public_path().'/images/'.$clientenatural->c_n_avatar;
        \File::delete($file_path);
        $fk_usuario = $clientenatural->fk_usuario;
        $clientenatural->delete();

        $role_usuario = \DB::table('role_usuario')->where('u_username', $fk_usuario)->delete();

        $usuario = \DB::table('usuario')->where('u_username', $fk_usuario)->delete();

        $clientesnaturales = ClienteNatural::all();
        return view('clientenatural.index-natural', compact('clientesnaturales'));

    }
}
