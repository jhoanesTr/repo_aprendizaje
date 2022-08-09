###Estilos
Los "css" y "js" van en:
```
public/css/app.css
public/js/app.js
```
Hay que crear las carpetas y enlazarlas con:
```
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
```
###Tabla 
La tabla está sin php

###Base de datos
Estoy trabajando con la BD 'obra-2'
- De momento solo tiene 'usuarios'
- Vamos a crear la tabla 'personas'
  ```
  php artisan make:migration personas
  ```
Cuando quiero cambiar algunos datos de las columnas da fallo,
la solucion es eliminar la tabla de la BD y darle 
    ```
    php artisan migrate: refresh
    ```
