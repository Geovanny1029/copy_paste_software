<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AlmacenController;
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
    return view('login');
});


// Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('home');
Auth::routes();

Route::get('/home  ', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/ventas',[App\Http\Controllers\VentasController::class, 'index'])->name('ventas.index');
Route::get('/almacen',[App\Http\Controllers\AlmacenController::class, 'index'])->name('almacen.index');


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

//rutas ventas productos
Route::post('/getproducto',[App\Http\Controllers\VentasController::class, 'getproducto'])->name('ventas.getproducto');