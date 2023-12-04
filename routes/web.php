<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\inventarioController;
use App\Http\Controllers\clienteController;

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
    return view('welcome');
});

Route :: get ('/inicio', [inicioController :: class, 'todos'] ) -> name('inicio.todos');

Route :: get ('/comida/crear', [clienteController :: class, 'crear']) ->name ('comida.crear');

Route :: get ('/verCrearComida', [inicioController :: class, 'ver'] ) -> name('inicio.ver');

Route :: get ('/comida/eliminar/{id}', [inicioController :: class, 'eliminarComida']) ->name ('comida.eliminar');

Route :: post ('/crearComida', [inicioController :: class, 'crear'] ) -> name ('comida.crear');



Route :: get ('/verCliente', [clienteController :: class, 'ver'] ) -> name ('cliente.ver');

Route :: post ('/crearCliente', [clienteController :: class, 'crear'] ) -> name ('cliente.crear');

Route :: get ('/cliente/todos', [clienteController :: class, 'todos']) ->name ('cliente.todos');

Route :: get ('/cliente/eliminar/{id}', [clienteController :: class, 'eliminarCliente']) ->name ('cliente.eliminar');

Route :: get ('/comida/crear', [clienteController :: class, 'crear']) ->name ('comida.crear');




Route :: get ('/inventario', [inventarioController :: class, 'obtener']) ->name ('inventario.obtener');

Route :: get ('/inventario/ingresar', [inventarioController :: class, 'ingresar']) ->name ('inventario.ingresar');

Route :: get ('/inventario/eliminar/{id}', [inventarioController :: class, 'eliminarIngrediente']) ->name ('inventario.eliminar');

Route :: post ('/inventario/crear', [inventarioController :: class, 'crear']) ->name ('inventario.crear');


