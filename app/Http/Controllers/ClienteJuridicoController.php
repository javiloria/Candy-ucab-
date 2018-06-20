<?php

namespace CandyUcab\Http\Controllers;

use CandyUcab\Lug_Jur;
use CandyUcab\Jur_Con;
use CandyUcab\ClienteJuridico;
use CandyUcab\Telefono;
use CandyUcab\Usuario;
use CandyUcab\Contacto;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use CandyUcab;
use CandyUcab\Role;
use Illuminate\Support\Facades\Hash;

class ClienteJuridicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientesjuridicos = ClienteJuridico::all();

        return View('clientejuridico.index-juridico', compact('clientesjuridicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientejuridico.registro-juridico');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $clientejuridico = new ClienteJuridico();

        if($request->hasFile('c_j_avatar')){
            $file = $request->file('c_j_avatar');
            $name = time().$file->getClientOriginalName();
            $clientejuridico->c_j_avatar = $name;
            $file->move(public_path().'/images/', $name);
        }

        $clientejuridico->c_j_rif = $request->input('c_j_rif');
        $clientejuridico->c_j_razonsocial = $request->input('c_j_razonsocial');
        $clientejuridico->c_j_dcomercial = $request->input('c_j_dcomercial');
        $clientejuridico->c_j_sitioweb = $request->input('c_j_sitioweb');
        $clientejuridico->c_j_capital = $request->input('c_j_capital');
        $clientejuridico->c_j_correo = $request->input('c_j_correo');
        $clientejuridico->fk_usuario = $request->input('u_username');

        $lug_jur = new Lug_Jur();
        $lug_jur->lj_lugar = $request->input('l_lugarprin');
        $lug_jur->lj_clientejuridico = $request->input('c_j_rif');

        $lug_jur1 = new Lug_Jur();
        $lug_jur1->lj_lugar = $request->input('l_lugarsec');
        $lug_jur1->lj_clientejuridico = $request->input('c_j_rif');
/*
        $telefono = new Telefono();
        $telefono->t_numero = $request->input('t_numero');
        $telefono->fk_clientejuridico = $request->input('c_j_rif');*/

        $usuario = new Usuario();
        $usuario->u_username = $request->input('u_username');
        $usuario->u_password = Hash::make($request->input('u_password'));
        $usuario
      ->roles()
      ->attach(Role::where('name', 'user')->first());

        $usuario->save();
        $clientejuridico->save();
        $lug_jur->save();
        $lug_jur1->save();

        foreach ($request->telefono as $cell) {
        $telefono = new Telefono();
        $telefono->t_numero = $cell;
        $telefono->fk_clientejuridico = $request->input('c_j_rif');
        $telefono->save();
        }

        for($index=0; $index< count($request->nombre) || $index< count($request->descripcion); $index++){
            $contacto = new Contacto();
            $contacto->co_nombre = $request->nombre[$index];
            $contacto->co_descripcion = $request->descripcion[$index];
            $contacto->save();

            $jur_con = new Jur_Con();
            $jur_con->jc_clientejuridico = $request->input('c_j_rif');
            $jur_con->jc_contacto = $contacto->co_id;
            $jur_con->save(); 
        }


        $clientesjuridicos = ClienteJuridico::all();
        return View('clientejuridico.index-juridico', compact('clientesjuridicos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ClienteJuridico $clientejuridico)
    {
        return view('clientejuridico.perfil-juridico', compact('clientejuridico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ClienteJuridico $clientejuridico)
    {
        return view('clientejuridico.editar-juridico', compact('clientejuridico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClienteJuridico $clientejuridico)
    {
        $clientejuridico->fill($request->except('c_j_avatar'));
             
        if($request->hasFile('c_j_avatar')){
            $file = $request->file('c_j_avatar');
            $name = time().$file->getClientOriginalName();
            $clientejuridico->c_j_avatar = $name;
            $file->move(public_path().'/images/', $name);
        }

        $clientejuridico->save();
        $clientesjuridicos = ClienteJuridico::all();

        return view('clientejuridico.index-juridico', compact('clientesjuridicos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClienteJuridico $clientejuridico)
    {
        
        $lug_jur = \DB::table('lug_jur')->where('lj_clientejuridico', $clientejuridico->c_j_rif)->delete();

        $jurs_cons = \DB::table('jur_con')->where('jc_clientejuridico', $clientejuridico->c_j_rif)->get();

        $jurs_con = \DB::table('jur_con')->where('jc_clientejuridico', $clientejuridico->c_j_rif)->delete();

        foreach ($jurs_cons as $jur_con) {
            $contacto = \DB::table('contacto')->where('co_id', $jur_con->jc_contacto)->delete();
        }

        $telefonos = \DB::table('telefono')->where('fk_clientejuridico', $clientejuridico->c_j_rif)->delete();

        $file_path = public_path().'/images/'.$clientejuridico->c_j_avatar;
        \File::delete($file_path);
        $fk_usuario = $clientejuridico->fk_usuario;
        $clientejuridico->delete();

        $role_usuario = \DB::table('role_usuario')->where('u_username', $fk_usuario)->delete();

        $usuario = \DB::table('usuario')->where('u_username', $fk_usuario)->delete();

        $clientesjuridicos = ClienteJuridico::all();
        return view('clientejuridico.index-juridico', compact('clientesjuridicos'));
    }
}
