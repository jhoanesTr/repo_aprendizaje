#Rutas web.php

```php
//Parámetro o variable obligatorio
Route::get('saludo/{variable}', function ($variable){
    return "Hola ". $variable;
});

//Parámetro o variable opcional con valor predeterminado
Route::get('saludo/{variable?}', function ($variable= "Variable por defecto"){
    return "Hola ". $variable;
});

//Formas de pasar datos
    #1
Route::get('/', function (){
    $nombre= "Lucas";
    
    return view('home')->with('nombre', $nombre);
})->name('home');

    #2
Route::get('/', function (){
    $nombre= "Lucas";
    
    return view('home', ['nombre' => $nombre]);
})->name('home');

    #3
Route::get('/', function (){
    $nombre= "Lucas";
    
    return view('home', compact('nombre')); //Equivale ['nombre' => $nombre]
})->name('home');
```

#Para cambiar el nombre de las rutas(create, edit, etc.)
[app/Providers/AppServiceProvider.php]
```php
public function boot()
    {
        Route::resourceVerbs([
            'create' => 'crear',
            'edit' => 'editar'
        ]);
    }
```

#Rutas dinámicas
```
https://aprendible.com/series/laravel-desde-cero/lecciones/activacion-de-links-de-navegacion
```

#Errores, validacion y formularios
```
https://aprendible.com/series/laravel-desde-cero/lecciones/como-validar-formularios
```
#Traduccion
```
https://aprendible.com/series/laravel-desde-cero/lecciones/como-traducir-tus-aplicaciones-en-laravel
```

#Permite leer html
```
{!!  !!}
```



#Artisan
```shell
#Muestra todos los comandos de laravel
php artisan
```


