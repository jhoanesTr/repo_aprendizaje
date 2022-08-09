###Rutas
Para agregar una ruta tenemos que entrar en el archivo 'routes/web.php'
- En el primer 'ponemos la ruta que vamos a escribir'.
  - Para un index se pondría '/'

- En el segundo 'ponemos la ubicación de los archivos a partir de la carpeta resources/views'
  - Para una subcarpeta de resources/views se pondría '/carpeta/nombre del archivo'

- El archivo a ver siempre deberá terminar en: .blade.php 
```
Route::get('/', function () {
return view('index');
});
```
También podemos preguntar si existe.
```
Route::get('/verga', function (){
    return view()->exists('/verga/index');
});
```
---
###Creamos componentes
Los componentes se crean en app/View/Components
```
php artisan make:component nombreDelComponente
```

###Login
Primero creamos un controlador llamado 'AuthController'.
Nos aparecerá en: app/Http/Controllers/AuthController.php
```
php artisan make:controller AuthController
```
Ahora creamos un modelo llamado 'Usuarios'
```
php artisan make:model Usuarios
```
Para cambiar la tabla a la que se consulta el login configuramos en: config/auth.php
en la linea 65
---

