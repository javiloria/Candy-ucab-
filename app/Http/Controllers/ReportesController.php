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
    

}
