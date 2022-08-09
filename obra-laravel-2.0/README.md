###FrontEnd
Dentro de **views** creamos:
- Personas
- Empresas
- Citas
- Informes
- login.blade.php
- index.blade.php *

###Creamos los componentes
```
php artisan make:component Layout
php artisan make:component Header
php artisan make:component Footer
php artisan make:component Container
php artisan make:component container/Encabezado
php artisan make:component container/Tabla
php artisan make:component acciones/Personas

```

Después de crear los componentes los rellenamos y desarrollamos todo el FrontEnd

###Creamos (Modelos, Tablas y Controladores)
```
php artisan make:model Personas -mcr
php artisan make:model Empresas -mcr
php artisan make:model Citas -mcr
```
Configuramos los controladores(index, create, edit, show, update y destroy)

###Rellenamos las tablas

#Problemas
al usar el formulario personas.blade.php en Personas/editar.blade.php no recoge los datos de la base de datos, pero si los inserta

