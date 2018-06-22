@extends('layouts.master')

@section('title', 'Registro jurídico')

@section('contenido')

<div class="container">

	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenedor-fomulario">
				<h1 class="text-center estilo-escabezado-registro titulos-principales">Registro de usuario jurídico</h1>
				<div class="form-group">
					<input type="text" class="form-control input-lg{{ $errors->has('rif') ? ' is-invalid' : '' }}" name="rif" value="{{ old('Rif') }}" placeholder="{{ __('Rif') }}"/ required>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg{{ $errors->has('denominación_comercial') ? ' is-invalid' : '' }}" name="denominación_comercial" value="{{ old('denominación_comercial') }}" placeholder="{{ __('Denominación comercial') }}"/ required>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg{{ $errors->has('telf_1') ? ' is-invalid' : '' }}" name="telf_1" value="{{ old('telf_1') }}" placeholder="{{ __('Telf 1') }}"/ required>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg{{ $errors->has('telf_2') ? ' is-invalid' : '' }}" name="telf_2" value="{{ old('telf_2') }}" placeholder="{{ __('Telf 2 (opcional)') }}"/ >
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg{{ $errors->has('web') ? ' is-invalid' : '' }}" name="web" value="{{ old('web') }}" placeholder="{{ __('Página web') }}"/ required>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg{{ $errors->has('capital_disponible') ? ' is-invalid' : '' }}" name="capital_disponible" value="{{ old('capital_disponible') }}" placeholder="{{ __('Capital disponible') }}"/ required>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg{{ $errors->has('persona_1') ? ' is-invalid' : '' }}" name="persona_1" value="{{ old('persona_1') }}" placeholder="{{ __('Persona de contacto 1') }}"/  required>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg{{ $errors->has('persona_2') ? ' is-invalid' : '' }}" name="persona_2" value="{{ old('persona_2') }}" placeholder="{{ __('Persona de contacto 2') }}"/  >
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg{{ $errors->has('direccion_p') ? ' is-invalid' : '' }}" name="direccion_p" value="{{ old('direccion_p') }}" placeholder="{{ __('Dirección fiscal principal') }}"/  required>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg{{ $errors->has('direccion_s') ? ' is-invalid' : '' }}" name="direccion_s" value="{{ old('direccion_s') }}" placeholder="{{ __('Dirección fiscal') }}"/  >
				</div>
				<div class="form-group">
				    <input type="email" class="form-control input-lg{{ $errors->has('denominación_comercial') ? ' is-invalid' : '' }}" name="denominación_comercial" value="{{ old('denominación_comercial') }}"  placeholder="{{ __('Email') }}"/  required>
				</div>

				<div class="form-group">
				    <input type="email" class="form-control input-lg{{ $errors->has('denominación_comercial') ? ' is-invalid' : '' }}" name="denominación_comercial" value="{{ old('denominación_comercial') }}" placeholder="Confirmar Email"/  required>
				</div>

				<div class="form-group">
				    <input type="password" class="form-control input-lg{{ $errors->has('denominación_comercial') ? ' is-invalid' : '' }}" name="denominación_comercial" value="{{ old('denominación_comercial') }}" placeholder="Contraseña"/  required>
				</div>

				<div class="form-group">
				    <input type="password" class="form-control input-lg{{ $errors->has('denominación_comercial') ? ' is-invalid' : '' }}" name="denominación_comercial" value="{{ old('denominación_comercial') }}" placeholder="Confirmar contraseña"/  required>
				</div>
				<br>

			</div>
			<div class="form-group">
	                 <input type="submit" class="btn btn-block btn-lg btn-primary" value="Registrar"/>
	            </div>
		</div>
	</div>
</div>

@stop
