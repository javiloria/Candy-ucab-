@extends('layouts.menuadmin')

@section('title', 'Usuario')

@section('contenido')

<div class="container text-center" id="contenedorElias">
	<div class="row">
			@foreach($usuario as $user)
				<div class="col-sm">
						<div class="card text-center" id="contenedorCarta">
							<?php  ?>
					        <div class="card-body">
						        <h2 class="card-title">user: {{$user->u_username}} </h2>
						        
						        <?php  $rol=  DB::table('role_usuario')->where('u_username',$user->u_username)->get(); 
     								?>
     	@foreach($rol as $r)
    <?php  
    	$rols=  DB::table('roles')->where('id',$r->role_id )->get(); 
        ?>
        @foreach($rols as $print)
        <h4> rol: {{$print->name}}  </h4>
        @endforeach
    @endforeach
						        <p> </p>
						        <p> </p>
						        <a href="/usuario/{{$user->u_username}}" class="btn btn-primary">Ver mas</a>
					  		</div>
						</div>
				</div>
			@endforeach
	</div>
</div>

@stop