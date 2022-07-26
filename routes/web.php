<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutaController;
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
Route:: get('tipo_usuario',[RutaController:: class, 'showT']);
Route:: get('persona',[RutaController:: class, 'showPer']);
Route:: get('buses',[RutaController:: class, 'showB']);
Route:: get('cooperativa',[RutaController:: class, 'showC']);
Route:: get('paradas',[RutaController:: class, 'showPar']);
Route:: get('rutas',[RutaController:: class, 'showR']);
Route:: get('principal',[RutaController:: class, 'showPP']);
