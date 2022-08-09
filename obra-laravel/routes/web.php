<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\CitasController;
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

Route::resource('citas', CitasController::class);
Route::resource('personas', PersonasController::class);
Route::resource('empresas', EmpresasController::class);

Route::view('informes', 'Informes.index')->name('informes');

