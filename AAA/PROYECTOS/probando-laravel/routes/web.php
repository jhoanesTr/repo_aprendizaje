<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Aquí es donde puede registrar rutas web para su aplicación. Estas
| las rutas son cargadas por el RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo grandioso!
*/

//Solo rutas
Route::get('/', function () {
    return view('index');
});
        #Login
Route::get('/login', function (){
    return view('login');
});
        #Citas
Route::get('/citas', function (){
    return view('/citas/index');
});
        #Personas
Route::get('/personas', function (){
    return view('/personas/index');
});
        #Empresas
Route::get('/empresas', function (){
    return view('/empresas/index');
});

//Formularios
        #Login
Route::post('/login', function (){
   $credentials= request()->only('nome', 'password');
   //dump($credentials);

   if(Auth::attempt($credentials)){
       request()->session()->regenerate();
       return 'Logueado';
   }return 'Intentalo de nuevo';
});

