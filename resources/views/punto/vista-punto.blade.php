@extends('layouts.master')

@section('title', 'Vista Cliente Natural')

@section('contenido')

<div class="container text-center" id="contenedorElias">
	<h1 class="text-center titulos-principales" style = "margin-top: -35px;">Registro de Puntos Otorgados</h1>

		<div class="row">
			@foreach($puntos as $punto)
		<div class="col-sm">
					
						<div class="card text-center" style="margin-top: 30px; background-color: #B9E3D9" id="contenedorCarta">

							<a href = "/punto/{{$punto->fk_usuario}}">	
					        <div class="card-body">
						        <h2 class="card-title">{{$punto->fk_usuario}}</h2>
								
								<b> {{$punto->pu_valor}} </b>
								<b> {{$punto->pu_descripcion}} </b>
								<p> </p>
                                <a href="/punto/{{$punto->fk_usuario}}/edit" class = "btn btn-primary"> Actualizar </a>
                                <p> </p>
                                {!! Form::open(['route'=>['punto.destroy',$punto->fk_usuario],'method'=>'DELETE' ]) !!}
    							{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
   								{!! Form::close() !!}
					  		</div>
					  	   </a>
						</div>
					

		</div>
		 	@endforeach
		 </div>
	</div>
</div>

@stop