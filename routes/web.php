<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('Proveedors',           \App\Http\Controllers\ProveedorController::class)->names('proveedor');
Route::resource('Portafolios',          \App\Http\Controllers\PortafolioController::class);
Route::resource('Sucursals',            \App\Http\Controllers\SucursalController::class);
Route::resource('Socios',               \App\Http\Controllers\SocioController ::class);
Route::resource('Franquicias',          \App\Http\Controllers\FranquiciaController ::class);
Route::get("/FranquiciaSuc",            [\App\Http\Controllers\FranquicitarioController::class, "getFranquiciasByIdSucursal"])->name('Franquicias.GetSuc');
//Route::get("/FranquiciaSuc",            [\App\Http\Controllers\FranquicitarioController::class, "getFranquiciasByIdSucursal"]); ESTE PEDO yA FUNCIONABA AQUI PERO CON RANDOM
//Route::get('about-us', [PagesController::class, 'aboutPage'])->name('pages.about');
Route::resource('Franquicitarios',      \App\Http\Controllers\FranquicitarioController ::class);
Route::get("/CentauroTarifa",            [\App\Http\Controllers\TarificadorSucursalController::class, "getTarifaCentauro"])->name('Tarifa.Centauro');
Route::resource('TarificadorSucursal',  \App\Http\Controllers\TarificadorSucursalController::class);
