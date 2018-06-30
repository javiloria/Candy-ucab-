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

    	 echo "aun no conectado ingress vs egress";
    	 echo $request->tienda;
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

    	$tiendas=  Tienda::all();
		return view('reporte.puntoscanjeado',compact('tiendas'));
    }



}
