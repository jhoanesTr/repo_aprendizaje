<?php

// DEPENDENCIAS
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// LLAMADAS
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersoasController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OfertasFormacionController;

/*
| Web Routes
|-----------------------------------------------------------------------------------------------
| Here is where you can register web routes for your application. These routes are loaded by the
| RouteServiceProvider within a group which contains the "web" middleware group.
*/

// Route::get('/', function () { return view('index'); });

Auth::routes();

// LOGIN e INICIO (solo users registrados)
Route::view('/', 'auth.login');
Route::get('/index', [HomeController::class, 'index'])->name('index')->middleware('auth.basic');

// PANEL ADMINISTRACION - SOLO ACCESIBLE A PERMITIDOS
// LO DE REGISTRAR USUARIOS NUEVOS SE HARÁ MEDIANTE CONTROLADOR DE USERS
Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin/index', [UserController::class, 'index'])->name('admin.index'); // PANEL ADMIN
    Route::get('/admin/show', [UserController::class, 'show'])->name('admin.show'); // MOSTRAR USUARIOS
    Route::get('/admin/create', [UserController::class, 'create'])->name('admin.create'); // CREAR USUARIO
    Route::post('/admin',  [UserController::class, 'store'])->name('admin.store');
    // Route::get('/auth/register', [HomeController::class, 'newUser'])->name('auth.register');
});

// RUTAS DE PERSOAS
Route::group(['middleware' => ['auth']], function () {
    Route::get('/persoas/index', [PersoasController::class, 'index'])->name('persoas.index'); // INDEX + BUSQUEDA + SORTING
    Route::get('/persoas/create',  [PersoasController::class, 'create'])->name('persoas.create'); // CREAR NUEVA
    Route::post('/persoas',  [PersoasController::class, 'store'])->name('persoas.store');
    Route::get('/persoas/{id}/edit',  [PersoasController::class, 'edit'])->name('persoas.edit'); // EDITAR UN REGISTRO
    Route::post('/persoas/{id}',  [PersoasController::class, 'update'])->name('persoas.update');
    Route::get('/persoas/{id}/show',  [PersoasController::class, 'show'])->name('persoas.show'); // VER UN REGISTRO
    Route::delete('/persoas/{id}', [PersoasController::class, 'destroy'])->name('persoas.destroy'); // ELIMINAR UN REGISTRO - NO TIENE VISTA
});

// RUTAS DE EMPRESAS
Route::group(['middleware' => ['auth']], function () {
    Route::get('/empresas/index', [EmpresasController::class, 'index'])->name('empresas.index'); // INDEX + BUSQUEDA + SORTING
    Route::get('/empresas/create',  [EmpresasController::class, 'create'])->name('empresas.create'); // CREAR NUEVA
    Route::post('/empresas',  [EmpresasController::class, 'store'])->name('empresas.store');
    Route::get('/empresas/{id}/edit',  [EmpresasController::class, 'edit'])->name('empresas.edit'); // EDITAR UN REGISTRO
    Route::post('/empresas/{id}',  [EmpresasController::class, 'update'])->name('empresas.update');
    Route::get('/empresas/{id}/show',  [EmpresasController::class, 'show'])->name('empresas.show'); // VER UN REGISTRO
    Route::delete('/empresas/{id}', [EmpresasController::class, 'destroy'])->name('empresas.destroy'); // ELIMINAR UN REGISTRO - NO TIENE VISTA
});

// RUTAS DE OFERTAS DE FORMACIÓN
Route::group(['middleware' => ['auth']], function () {
    Route::get('/ofertas_formacion/index', [OfertasFormacionController::class, 'index'])->name('ofertas_formacion.index'); // INDEX
});

// RUTAS DE OFERTAS DE CONTRATACIÓN

// PDF
Route::get('/personas/pdf', [PersoasController::class, 'pdf'])->name('personas.pdf');
