@extends('layouts.master')

@section('title', 'Login')

@section('contenido')
<div class="modal-dialog contenedor-login">
    <div class="modal-content">
        <div class="modal-header">
           <h1 class="text-center">Inicio de sesión</h1>
         </div>
            <div class="modal-body">

                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="u_username" class="col-sm-4 col-form-label text-md-right">{{ __('username') }}</label>

                            <div class="col-md-6">
                                <input id="u_username" type="text" class="form-control{{ $errors->has('u_username') ? 'has-error' : '' }}" name="u_username" value="{{ old('u_username') }}" required autofocus>

                                @if ($errors->has('u_username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('u_username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                              <div class="form-group">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? 'has-error' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>
                        </div>


                              <div class="form-group">
                                  <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('    Guardar') }}
                                    </label>
                                </div>
                              </div>
                              </div>



                                <button type="submit" class="btn btn-block btn-lg btn-primary" value="Login">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Olvido su clave?') }}
                                  </a>

                     	                 <a class="btn btn-link"href="registro"> Registrar usuario
                                      </a>



                    </form>
                </div>
            </div>
        </div>

@stop
