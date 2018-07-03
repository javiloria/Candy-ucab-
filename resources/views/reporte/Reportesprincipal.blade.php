@extends('layouts.menuadmin')
@section('title', 'Reportes')

@section('contenido')
<div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Reportes</h1>
        <p><a href="/">Inicio</a> > Reportes</p>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul >
    	<li>5 mejores clientes segun monto de compras realizadas<a href="/clientecompra"> 	ir al reporte</a></li>
    	<li> 10 clientes  más frecuentes por tienda y periodo de tiempo <a href="/cli-frec">	 ir al reporte</a></li>
    	<li> clientes con presupuestos que generaron compra por tienda y por periodo de tiempo <a href="/pre-compra">   	ir al reporte</a></li>
    	<li> Productos más vendido por tienda <a href="/pro-vendido"> 	ir al reporte</a></li>
    	<li> Ranking de productos por Tienda y por lugar <a href="/pro-ranking"> 	ir al reporte</a></li>
    	<li> Puntos canjeados por tiendas y lugar <a href="/punto-canjeado">	 ir al reporte</a></li>
    	<li> Mes más rentable para las tiendas por lugar  <a href="/mes-rentable">    ir al reporte</a></li>
        <li> 5 mejores clientes (según monto de compras) por periodo de tiempo <a href="/cliente-mejores">    ir al reporte</a></li>
        <li> Lista de los 10 clientes con mayor cantidad de puntos <a href="/cliente-punto">    ir al reporte</a></li>
        <li> Las tiendas que más recibieron pagos con puntos <a href="/tienda-punto">    ir al reporte</a></li>
        
    </ul>
    </div>
</div>


@stop