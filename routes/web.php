<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutaController;
use App\Http\Livewire\Pageprincipal;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('paginas.login');
// })->name('login');
Route:: get('registro',[RutaController:: class, 'showRe']);
Route:: get('dashboard',[RutaController:: class, 'showDa']);
Route:: get('dev',[RutaController:: class, 'showEq']);
Route:: get('tipo_usuario',[RutaController:: class, 'showT']);
Route:: get('persona',[RutaController:: class, 'showPer']);
Route:: get('buses',[RutaController:: class, 'showB']);
Route:: get('cooperativa',[RutaController:: class, 'showC']);
Route:: get('paradas',[RutaController:: class, 'showPar']);
Route:: get('rutas',[RutaController:: class, 'showR']);
Route:: get('Reg-horario',[RutaController:: class, 'showH']);
Route:: get('principal',[RutaController:: class, 'showPP']);
Route:: get('ruta-paradas{ruta}',[Pageprincipal:: class, 'rutas']);
Route:: get('estaciones{parada}',[Pageprincipal:: class, 'estacion']);




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
