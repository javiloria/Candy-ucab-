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

Route::view('/','inicio');
Route::view('contacto','contacto');

//mosca se debe camiar esto al implementarlo
Route::view('registro-juridico', 'registro-juridico');

//manejo de registro
Route::resource('clientenatural', 'ClienteNaturalController');
Route::view('registro', 'registro')->middleware('guest');

Route::resource('clientejuridico', 'ClienteJuridicoController');

// Rutas para el login...
Route::view('login','auth.login')->middleware('guest')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login');

//manejando el logout
Route::get('logout', 'LogoutController@index')->name('logout');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::view('nosotros', 'nosotros');

//rutas que necesita estar autenticado
Route::group(['middleware' => ['auth']], function() {

    Route::resource('/presupuestos','PresupuestoController');

    Route::view('ofertas','ofertas');

    //CRUD DE manejo de roles y permisos
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');

    //ruta para los controladores que haran la funcion de CRUD
    Route::resource('/productos','ProductoController');
    Route::resource('/tiendas','TiendaController');
    Route::view('excel','plataforma.subirExcell');
    //importar archivo excell
    Route::post('/import-excel', 'ExcelController@importUsers');

    Route::get('/plataforma', function() {
        return view('plataforma.index');
    });

    Route::get('perfil-cliente', function() {
        return view('plataforma.profile');
    });

    Route::get('en-blanco', function() {
        return view('plataforma.blank');
    });

    Route::get('tabla-basica', function() {
        return view('plataforma.basic-table');
    });

    Route::get('crear-producto', function() {
        return view('plataforma.crear-producto');
    });

    Route::get('modificar-producto', function() {
        return view('plataforma.modificar-producto');
    });

    Route::get('eliminar-producto', function() {
        return view('plataforma.eliminar-producto');
    });
    Route::resource('/pedidos','PedidoController');
    Route::POST('pedidos/crear','PedidoController@crear');
    
    Route::view('/pedido/pagar','Pedido.pagar');
    Route::resource('credito','CreditoController');
    Route::resource('cheque','ChequeController');
    Route::resource('debito','DebitoController');
});
