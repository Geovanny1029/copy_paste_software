<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\UsuariosController;
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

Route::post('/usuarios/crear',[App\Http\Controllers\UsuariosController::class, 'crear'])->name('usuarios.crear');

////rutas modulo usuario
Route::get('/CargarUsuarios',[App\Http\Controllers\UsuariosController::class, 'cargarusuarios'])->name('usuario.carga');


