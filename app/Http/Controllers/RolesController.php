<?php

namespace CandyUcab\Http\Controllers;

use Illuminate\Http\Request;
use CandyUcab\Role;
use CandyUcab\Privilegio;
use CandyUcab\Rol_Privilegio;
use Illuminate\Support\Facades\DB;
class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles= Role::all();
      //le paso a la vista todos los productos enla BD
      return view ('roles.index-roles',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $privilegios= Privilegio::all();
        return view ('roles.create-roles',compact('privilegios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol=new Role();
        $rol_privilegio= new Rol_Privilegio();
        $rol->name = $request->input('r_nombre');
        $rol->description = $request->input('r_descripcion');
        $rol->save();
        $roles=  DB::table('roles')->where('name', $request->input('r_nombre'))->where('description',$request->input('r_descripcion'))->get();
        foreach ($roles as $rolsito ) {
            $salida=$rolsito->id;
        }
        
        $rol_privilegio->r_p_privilegio =$request->input('privilegio');
        $rol_privilegio->r_p_rol =$salida;
        $rol_privilegio->save();

         $roles= Role::all();
      //le paso a la vista todos los productos enla BD
      return view ('roles.index-roles',compact('roles'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $privilegios=  DB::table('rol_privilegio')->where('r_p_rol', $id)->get();
        $roles=  DB::table('roles')->where('id', $id)->get();
      return view ('roles.show-roles',compact('roles','privilegios'));
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
        
            DB::table('rol_privilegio')->where('r_p_rol',$id )->delete();

          $rol=  DB::table('roles')->where('id',$id )->delete();
          //borrando los datos
      
      //devolver la vista index
      $roles=  Role::all();
      //le paso a la vista todos los productos enla BD
      return view ('roles.index-roles',compact('roles'));
    }
}
