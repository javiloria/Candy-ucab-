<?php

namespace CandyUcab\Http\Controllers;

use CandyUcab\Tienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    //Reporte de ingresos vs egresos de cada tienda

    public function clientesporcompra()
    {
        $clientesporcompra = DB::select(DB::raw("
          SELECT C.c_n_pnombre, C.c_n_papellido, Sum(pa.p_monto)
          from clientenatural C, usuario U, pedido P, Pago Pa,
          Credito mc, Debito mb
          where 
          C.fk_usuario = U.u_username and
          P.fk_usuario = U.u_username and
          Pa.fk_pedido = P.p_nombre and
          (Pa.fk_credito = mc.mp_cod or Pa.fk_debito = mb.mp_cod)
          group by C.c_n_pnombre, C.c_n_papellido
          order by Sum(pa.p_monto) desc
          Limit 5"));

        return view('reporte.clientesporcompra', compact('clientesporcompra'));
    }

    public function asistenciaempleados(){

        $datosempleados = 
        \DB::select(DB::raw("SELECT H.h_fechallegada, H.h_fechasalida,E.e_ci,E.e_nombre, E.e_apellido, E.fk_departamento
            From Empleado E, Horario H, Asistencia A, Departamento D
            Where E.e_ci = A.fk_empleado and
            H.h_cod = A.Fk_horario and
            D.d_numero = E.fk_departamento
            Order by H.h_cod desc"));

        return view('reporte.asistenciaempleados', compact('datosempleados'));

    }


    public function viewingresovsegresos(){

    	$tiendas=  Tienda::all();
		return view('reporte.ingresosvsegresos',compact('tiendas'));
    }

    public function clientesfrecuentes(Request $request)
    {
        $tiendas = \DB::table('tienda')->where('t_cod',$request->input('tienda'))->get(); 
        foreach ($tiendas as $tienda);

        $clientesfrecuentes = 
        \DB::select(DB::raw("SELECT T.t_cod, C.c_n_pnombre, C.c_n_papellido, count(C.c_n_pnombre)
          from clientenatural C, usuario U, pedido P, 
          presupuesto Pr, venta V, Tienda T
          where C.fk_usuario = U.u_username and
          P.fk_usuario = U.u_username and
          Pr.p_cod = P.fk_presupuesto and
          V.fk_presupuesto = Pr.p_cod and
          T.t_cod = $tienda->t_cod
          group by T.t_cod, C.c_n_pnombre, C.c_n_papellido, V.v_fechafac
          order by count(C.*) desc, V.v_fechafac desc
          Limit 10"));

          return 
          view('reporte.clientesfrecuentes', compact('clientesfrecuentes'));
    	// echo $request->tienda;
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

       $tiendas = \DB::table('tienda')->where('t_cod',$request->input('tienda'))->get(); 
        foreach ($tiendas as $tienda);

        $lugares = \DB::table('lugar')->where('l_cod',$request->input('lugar'))->get(); 
        foreach ($lugares as $lugar);

    	 $productos = 
        \DB::select(DB::raw("SELECT P.*
                            from Producto P, Tienda T, Lugar L
                            where 
                            T.fk_lugar = L.l_cod and
                            P.fk_tienda = T.t_cod and
                            T.t_cod = $tienda->t_cod and
                            L.l_cod = $lugar->l_cod
                            order by p_precio desc"));

          return 
          view('reporte.vista-productosranking', compact('productos'));
    	
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
