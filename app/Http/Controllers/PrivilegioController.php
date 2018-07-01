<?php

namespace CandyUcab\Http\Controllers;

use Illuminate\Http\Request;
use CandyUcab\Privilegio;
use Illuminate\Support\Facades\DB;
class PrivilegioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $privilegio= Privilegio::all();
      //le paso a la vista todos los productos enla BD
      return view ('privilegios.index-privilegio',compact('privilegio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('privilegios.create-privilegio');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $privilegio= new Privilegio();
        $privilegio->p_nombre = $request->input('nombre');    
        $privilegio->save();
        $privilegio= Privilegio::all();
      //le paso a la vista todos los productos enla BD
      return view ('privilegios.index-privilegio',compact('privilegio'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $privilegios=  DB::table('privilegio')->where('p_cod', $id)->get();
    
      return view ('privilegios.show-privilegio',compact('privilegios'));
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
        DB::table('privilegio')->where('p_cod',$id )->delete();

          $privilegio= Privilegio::all();
      //le paso a la vista todos los productos enla BD
      return view ('privilegios.index-privilegio',compact('privilegio'));
      
      
    }
}
