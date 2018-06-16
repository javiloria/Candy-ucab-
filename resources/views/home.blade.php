@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  

                  @if(Auth::user()->hasRole('admin'))
<div>Acceso como administrador</div>
@else
<div>Acceso usuario</div>
@endif

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            </div>

You are logged iin!

                    @endif

                    You are logged innnn!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
