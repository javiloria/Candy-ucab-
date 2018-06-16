<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::resource('clientenatural', 'ClienteNaturalController');

Route::get('productos', function () {
	return view('productos');
});

Route::get('tiendas', function() {
	return view('tiendas');
});

Route::get('nosotros', function() {
	return view('nosotros');
});

Route::get('ofertas', function() {
	return view('ofertas');
});

Route::get('contacto', function() {
	return view('contacto');
});

Route::get('login', function() {
	return view('login');
});

Route::get('registro-juridico', function() {
	return view('registro-juridico');
});

Route::get('registro-natural', function() {
	return view('registro-natural');
});

Route::get('registro', function() {
	return view('registro');
});