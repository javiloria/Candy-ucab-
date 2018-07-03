<?php

namespace CandyUcab\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use CandyUcab\Tienda;
class ReportesController extends Controller
{
    //Reporte de ingresos vs egresos de cada tienda

    public function ingresosvsegresos(Request $request)
    {
        $egresos = DB::select(DB::raw("SELECT sum(pr.pp_cantidad*pro.p_precio) from tienda t,pedido p, presupuesto pre,pro_pre pr,producto pro where p.fk_tienda=$request->tienda AND p.p_nombre= pre.fk_pedido AND pre.p_cod=pr.fk_pre_cod" 

        ));
    	 echo "aun no conectado ingress vs egress";
    	 print_r($egresos);
    }

    public function viewingresovsegresos(){

    	$tiendas=  Tienda::all();
		return view('reporte.ingresosvsegresos',compact('tiendas'));
    }

    public function clientesfrecuentes(Request $request)
    {
         
    	 echo "aun no conectado clientes frecuentes";
    	 echo $request->tienda;
    }

    public function viewclientesfrecuentes(){

    	$tiendas=  Tienda::all();
		return view('reporte.clientesfrecuentesportienda',compact('tiendas'));
    }

    public function generadorescompra(Request $request)
    {
    	 echo "aun no conectado pres generaron cn";
    	 echo $request->tienda;
    	 echo $request->fecha_inicio;
    	 echo $request->fecha_fin;
    }

     public function viewgeneradorescompra(){

    	$tiendas=  Tienda::all();
		return view('reporte.generadorescompra',compact('tiendas'));
    }

    //
    public function productosranking(Request $request)
    {
    	 echo "aun no conectado prod ranking";
    	
    }

     public function viewproductosranking(){

    	$tiendas=  Tienda::all();
		return view('reporte.productosranking',compact('tiendas'));
    }

    //
public function productosvendidos(Request $request)
    {
    	 echo "aun no conectado pr vendids";
    	
    }

     public function viewproductosvendidos(){

    	$tiendas=  Tienda::all();
		return view('reporte.productosvendido',compact('tiendas'));
    }

    //

    public function puntoscanjeados(Request $request)
    {
    	 echo "aun no conectado puntoscanjeados";
    	
    
    }

     public function viewpuntoscanjeados(){

    	$tiendas=    Tienda::all();
        $estado=     DB::table('lugar')->where('l_tipo', 'Estado')->get();
        $municipio=  DB::table('lugar')->where('l_tipo', 'Municipio')->get();
        $parroquia=  DB::table('lugar')->where('l_tipo', 'Parroquia')->get();
		return view('reporte.puntoscanjeado',compact('tiendas','estado','municipio','parroquia'));
    }

    public function viewmesmasrentablelugar(){

        $estado=     DB::table('lugar')->where('l_tipo', 'Estado')->get();
        $municipio=  DB::table('lugar')->where('l_tipo', 'Municipio')->get();
        $parroquia=  DB::table('lugar')->where('l_tipo', 'Parroquia')->get();
        return view('reporte.mesmasrentabletiendalugar',compact('estado','municipio','parroquia'));

    }

    public function mesmasrentablelugar(Request $request){
        echo "mes mas rentabe lugar";

    }

    // 5 mejores clientes (según monto de compras) por periodo de tiempo
    public function clientemejores(Request $request){
        echo "mejores clientes";

    }

    public function viewclientemejores(){
        
        return view('reporte.cincomejorestiempo');

    }
    

    public function clientesconmaspuntos(){
        
         $clientes  = DB::select(DB::raw(" select nat.c_n_pnombre as nombre, nat.c_n_papellido as apellido,nat.c_n_cedula as ci
            from clientenatural nat
            where nat.fk_usuario in (select u.u_username  from punto pu,usuario u, clientenatural cn, clientejuridico cj
            where pu.fk_usuario=u.u_username AND (u.u_username=cn.fk_usuario OR u.u_username=cj.fk_usuario)
            group by(u.u_username)
            order by sum(pu.pu_valor)
            )
            UNION
            select  jur.c_j_dcomercial as nombre,jur.c_j_razonsocial as apellido,jur.c_j_rif as cedula
            from clientejuridico jur
            where jur.fk_usuario in (select u.u_username  from punto pu,usuario u, clientenatural cn, clientejuridico cj
            where pu.fk_usuario=u.u_username AND (u.u_username=cn.fk_usuario OR u.u_username=cj.fk_usuario)
            group by(u.u_username)
            order by sum(pu.pu_valor)
            )
            limit 10 ;
            "));
        return view('reporte.reportesmostrar.clientes1',compact('clientes'));

    }

    public function tiendaconmaspunto(){
      $tiendas = DB::select(DB::raw("SELECT ti.t_nombre as nombre,sum(pu.pu_valor) as total FROM tienda ti,punto pu ,pedido pe, usuario u 
            WHERE pu.fk_usuario=u.u_username AND u.u_username= pe.fk_usuario AND pe.fk_tienda=ti.t_cod
            group by ti.t_nombre
            order by sum(pu.pu_valor) desc;  "));
     
      return view('reporte.reportesmostrar.tiendaconmaspunto',compact('tiendas'));

    }
}
