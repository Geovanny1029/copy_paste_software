<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\CuentasController;


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
Route::get('users/index', [UserController::class, 'index'])->name('users.index');
Route::get('/', function () {
    return view('login');
});


// Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('home');
Auth::routes();


Route::get('/home  ', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios.index')->middleware('auth');
Route::get('/ventas',[App\Http\Controllers\VentasController::class, 'index'])->name('ventas.index')->middleware('auth');
Route::get('/almacen',[App\Http\Controllers\AlmacenController::class, 'index'])->name('almacen.index')->middleware('auth');
Route::get('/cotizaciones',[App\Http\Controllers\CotizacionesController::class, 'index'])->name('cotizaciones.index')->middleware('auth');
Route::get('/cuentas',[App\Http\Controllers\CuentasController::class, 'index'])->name('cuentas.index')->middleware('auth');


////rutas modulo usuario
Route::post('/usuarios/crear',[App\Http\Controllers\UsuariosController::class, 'crear'])->name('usuarios.crear');

Route::get('/CargarUsuarios',[App\Http\Controllers\UsuariosController::class, 'cargarusuarios'])->name('usuario.carga');

Route::post('/desactivar',[App\Http\Controllers\UsuariosController::class, 'desactivar'])->name('usuario.desactivar');

Route::post('/activar',[App\Http\Controllers\UsuariosController::class, 'activar'])->name('usuario.activar');

Route::post('/editar',[App\Http\Controllers\UsuariosController::class, 'editar'])->name('usuario.editar');

Route::post('/actualizarusuario/{id}',[App\Http\Controllers\UsuariosController::class, 'actualizar'])->name('usuario.actualizar');

/////////rutas modulo almacen
Route::post('/producto/crear',[App\Http\Controllers\AlmacenController::class, 'crear'])->name('almacen.crear');

Route::get('/CargarAlmacen',[App\Http\Controllers\AlmacenController::class, 'cargaralmacen'])->name('almacen.carga');

Route::post('/desactivaralmacen',[App\Http\Controllers\AlmacenController::class, 'desactivar'])->name('almacen.desactivar');

Route::post('/activaralmacen',[App\Http\Controllers\AlmacenController::class, 'activar'])->name('almacen.activar');

Route::post('/editaralmacen',[App\Http\Controllers\AlmacenController::class, 'editar'])->name('almacen.editar');

Route::post('/actualizarproducto/{id}',[App\Http\Controllers\AlmacenController::class, 'actualizar'])->name('almacen.actualizar');

Route::get('/ExportarProductos',[App\Http\Controllers\AlmacenController::class, 'ExportarProductos'])->name('almacen.ExportProductos');

  Route::post('/uplayoutproductos',[AlmacenController::class, 'importProductos']);
  Route::post('/checkBarcodeExists', [AlmacenController::class, 'checkBarcodeExists']);

//rutas ventas productos
Route::post('/getproducto',[App\Http\Controllers\VentasController::class, 'getproducto'])->name('ventas.getproducto');

Route::post('/getproductos',[App\Http\Controllers\VentasController::class, 'getproductos'])->name('ventas.getproductos');

Route::post('/getproducto_select',[App\Http\Controllers\VentasController::class, 'getproducto_select'])->name('ventas.getproducto');


//registrar venta
Route::post('/registro_ventas',[App\Http\Controllers\VentasController::class, 'registro_ventas'])->name('ventas.registro');
Route::post('/cierre_ventas',[App\Http\Controllers\VentasController::class, 'cierre_ventas'])->name('ventas.cierre');
Route::post('/registrar_cierre_ventas',[App\Http\Controllers\VentasController::class, 'registrar_cierre_ventas'])->name('ventas.cierre');
///REGISTRAR COTIZACIONES
Route::post('/registro_cotizacion',[App\Http\Controllers\CotizacionesController::class, 'registro_cotizacion'])->name('cotizacion.registro');
Route::get('/pdf2/{id}',[App\Http\Controllers\CotizacionesController::class, 'pdf'])->name('cotizacion.pdf');
Route::post('/desactivarcotizacion',[App\Http\Controllers\CotizacionesController::class, 'desactivarcotizacion'])->name('cotizacion.desactivar');
Route::post('/activarcotizacion',[App\Http\Controllers\CotizacionesController::class, 'activarcotizacion'])->name('cotizacion.activar');
Route::get('/CargaCotizaciones',[App\Http\Controllers\CotizacionesController::class, 'cargacotizaciones'])->name('cotizacion.carga');
//registrar cuentas
Route::post('/cierre_ventas_general',[App\Http\Controllers\VentasController::class, 'cierre_ventas_general'])->name('ventas.cierre');