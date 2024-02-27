<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsientoController;
use App\Http\Controllers\VuelosController;
use App\Http\Controllers\VuelosAsientosController;

use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'inicio'])->name('aerolinea.inicio');

Route::get('/tipoAsientos', [AsientoController::class, 'ver'])->name('aerolinea.tipoAsientos');

Route::get('/tipoAsientos/eliminar{id}', [AsientoController::class, 'eliminar'])->name('aerolinea.eliminar');

Route::get('/tipoAsientos/destroy{id}', [AsientoController::class, 'destroy'])->name('aerolinea.destroy');

Route::get('/tipoAsientos/editar{id}', [AsientoController::class, 'editar'])->name('aerolinea.editar');

Route::get('/tipoAsientos/agregar', [AsientoController::class, 'agregarTipoAsiento'])->name('aerolinea.agregar');

Route::post('/tipoAsientos/guardar', [AsientoController::class, 'guardar'])->name('aerolinea.agregarGuardar');

