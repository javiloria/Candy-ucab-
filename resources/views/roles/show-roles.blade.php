@extends('layouts.menuadmin')

@section('title', 'Rol')

@section('contenido')
  
<div class="text-center">
  @foreach($roles as $rol)
    <h1 >{{$rol->name}}</h1> <p></p>
    <span > <b> Cod: </b> {{$rol->id}}</span> <br>
    <span > <b> Descripcion: </b> {{$rol->description}} </span> <br>
    @foreach($privilegios as $privilegio)
    <?php  $privileg=  DB::table('privilegio')->where('p_cod',$privilegio->r_p_privilegio)->get(); 
      $string=json_encode($privileg);
          $porciones = explode("p_nombre", $string);
          $porciones2 = explode("}", $porciones[1]);
          $porciones3 = explode(':', $porciones2[0]);
     ?>
    <span > <b> Privilegio: </b> {{$porciones3[1]}}</span> <br>
    @endforeach
    @endforeach

</div>
  @if(Auth::user()->hasRole('admin'))

    <a class="btn btn-primary btn-lg botoncito" href="/roles/{{$rol->id}}/edit">Actualizar</a>
    {!! Form::open(['route'=>['roles.destroy',$rol->id],'method'=>'DELETE' ]) !!}
    {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
  
</div>
@endif
@stop
