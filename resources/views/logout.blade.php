@extends('layouts.master')
@section('title', 'Cerrar sesión')
@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
<h1 class="panel-title" > Bienvenido {{auth()->user()->u_username}}</h1>

                  @if(Auth::user()->hasRole('admin'))
<div>Permiso como administrador</div>
@else
<div>Permiso como usuario</div>
@endif

            
<div class="panel-body">
  <form method="POST" action="{{route('logout') }}">
    {{ csrf_field() }}
      <button class="btn btn-danger btn"> Cerrar sesión</button>
  </form>
</div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
