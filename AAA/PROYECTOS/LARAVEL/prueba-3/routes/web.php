<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
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


Route::view('/', 'login')->name('login');

Route::view('citas', 'Citas/index')->name('citas');

Route::view('personas', 'Personas.index')->name('personas');
Route::view('personas/modificar', 'Personas.modificar');
Route::view('personas/nuevo', 'Personas.nuevo');

Route::view('empresas', 'Empresas.index')->name('empresas');

Route::view('informes', 'Informes.index')->name('informes');

