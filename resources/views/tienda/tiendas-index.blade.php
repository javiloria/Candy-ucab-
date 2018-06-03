@extends('tienda.tiendas')

@section('central')




      	<div class="container">
      		<div class="row">
      			<div class="col-md-12">
      				<div class="row">
                    @foreach ($tiendas as $tienda)
      					<div class="col-md-4 ">
      						<div class="contenedor-tienda">
                    @php
                      //haciendo consulta para convertit el numero de la foranea en el nombre de lugar
                        $lugar = DB::table('lugar')->where('l_cod', $tienda->fk_lugar)->get();
                    @endphp
                      	<img class="estilo-tiendas" src="{{asset('imgs/assets/tienda-1.jpg')}}" alt="">
                      <h4 >{{$tienda->t_nombre}}</h4>
                      <span class="texto-tienda" >tipo: {{$tienda->t_tipotamano}}</span>
                        <span class="texto-tienda">ubicacion: @php
                        //transformando array en el valor interesado
                      foreach ($lugar as $l){
                        echo $l->l_nombre;
                        }
                        @endphp</span>




      						</div>
      					</div>

                                    @endforeach
      					</div>
                </div>
                </div>
                </div>




  @stop
