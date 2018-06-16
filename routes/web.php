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
Route::get('contacto', function() {
  return view('contacto');
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

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('nosotros', function() {
  return view('nosotros');
});

//rutas que necesita estar autenticado
Route::group(['middleware' => ['auth']], function() {
Route::get('ofertas', function() {
  return view('ofertas');
});
    /*Route::get('login', function() {
    	return view('login');
    });
    */
  //CRUD DE manejo de roles y permisos
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');

    //ruta para los controladores que haran la funcion de CRUD
    Route::resource('/productos','ProductoController');
    Route::resource('/tiendas','TiendaController');


});

//importar archivo excell
Route::post('/import-excel', 'ExcelController@importUsers');

Route::get('excel',function() {
  return view('subirExcell');
});
