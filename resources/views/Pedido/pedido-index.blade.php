@extends('layouts.master')

@section('title', 'Pedido')

@section('contenido')
<?php 
foreach($pedido as $ped){
 $pes= DB::table('ped_sta')->where('fk_pedido',  $ped->p_nombre )->get(); 
	foreach($pes as $p){
echo '<div class="card text-center" >';
  echo '<div class="text-center">';
    echo '<div class="card-body">';
    $paass= DB::table('status')->where('s_cod',  $p->fk_status )->get(); 
    $string=json_encode($paass[0]);
        $porciones = explode(" '", $string);
        $porciones2 = explode(":", $porciones[0]);
         $porciones3 = explode("}", $porciones2[2]);
       
       // $porciones2[0];
       // $porciones3 = explode(",", $porciones2[0]);
 
    echo '<h2> nombre:'.$ped->p_nombre.'</h2>';
    echo '<h3> Status:'.$porciones3[0].'</h3>';
   echo '</div>';
   echo '</div>';
   echo '</div>'; 
}
}
?>

@include('layouts.seccion-suscripcion')

@stop
