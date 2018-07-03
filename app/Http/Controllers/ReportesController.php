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
