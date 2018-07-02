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
//Rutas para el registro juridico
Route::resource('clientejuridico', 'ClienteJuridicoController');
//Rutas para enviar los puntos
Route::resource('punto', 'PuntoController');

//Rutas para enviar los puntos
Route::resource('oferta', 'OfertaController');


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
    Route::resource('/privilegios','PrivilegioController');
    Route::view('ofertas','ofertas');
    //CRUD DE manejo de roles y permisos
    Route::resource('/roles','RolesController');
    Route::resource('/usuario','UsuarioController');
    //ruta para los controladores que haran la funcion de CRUD
    Route::resource('/productos','ProductoController');
    Route::resource('/tiendas','TiendaController');
    Route::view('excel-web','plataforma.subirExcell');
    //importar archivo excell
    Route::post('/import-excel', 'ExcelController@importUsers');
    Route::view('registro-cliente-tienda/create', 'tienda.registro-clientetienda');
    Route::get('/registro-cliente-tienda', 'ClienteTiendaController@Vista');
    Route::get('/registro-cliente-tienda/{id}', 'ClienteTiendaController@Usuario');
    Route::post('/registro-cliente-tienda', 'ClienteTiendaController@Registro');

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
    Route::get('/pagar-punto','VentasController@viewpagarpunto');
    Route::post('/pagar-punto','VentasController@pagarpunto');
    //rutas para los reportes
    //Reporte de ingresos vz egresos de cada tienda
    Route::get('ing-egre','ReportesController@viewingresovsegresos');
    Route::post('ing-egre','ReportesController@ingresosvsegresos');
    //Listado de los 10 clientes frecuentes por tienda ( mayor número de ventas ) por periodo de tiempo
     Route::get('cli-frec','ReportesController@viewclientesfrecuentes');
    Route::post('cli-frec','ReportesController@clientesfrecuentes');
    //Listado por tiendas de clientes con presupuestos efectivos ( presupuestos que generaron compra) por tienda y por periodo de tiempo.
    Route::get('pre-compra','ReportesController@viewgeneradorescompra');
    Route::post('pre-compra','ReportesController@generadorescompra');
    //Productos más vendido por tienda
      Route::get('pro-vendido','ReportesController@viewproductosvendidos');
    Route::post('pro-vendido','ReportesController@productosvendidos');
    //Ranking de productos por Tienda y por lugar
    Route::get('pro-ranking','ReportesController@viewproductosranking');
    Route::post('pro-ranking','ReportesController@productosranking');
    //puntos canjeados por tienda y por lugar
    Route::get('punto-canjeado','ReportesController@viewpuntoscanjeados');
    Route::post('punto-canjeado','ReportesController@puntoscanjeados');
    //mes mas rentable por lugar
    Route::get('mes-rentable','ReportesController@viewmesmasrentablelugar');
    Route::post('mes-rentable','ReportesController@mesmasrentablelugar');

    //mes mas rentable por lugar
    Route::get('cliente-mejores','ReportesController@viewclientemejores');
    Route::post('cliente-mejores','ReportesController@clientemejores');
    //ruta principal para reportes
    Route::view('/reportes','reporte.Reportesprincipal');
    //manejar ventas
    Route::get('/ventas-iniciar','VentasController@iniciarventaview');
    Route::post('/ventas-iniciar','VentasController@iniciarventa');
    Route::get('/ventas-facturacion','VentasController@');
    Route::post('/ventas-facturacion','VentasController@facturacion');
    Route::get('/cliente-punto','ReportesController@clientesconmaspuntos');
});
