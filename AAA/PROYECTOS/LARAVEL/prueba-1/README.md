##Login
```
composer require laravel/ui
php artisan ui bootstrap --auth
npm install
npm run
```
Elegimos un nuevo "provider" en: config/auth.php
- Podemos elegir el nombre de la tabla
```
'providers' =>[
    'custom' => [
        'driver' => 'custom_user',
        'model' => 'App\User::class',
        'table' => 'usuarios',
    ],
],
```
En el mismo archivo configuramos el "guards"
- Elegimos el provider que creamos: 'custom'
```
'guards' =>[
    'custom' => [
        'driver' => 'session',
        'provider' => 'custom'
    ],
],
```
Ahora elegimos cual se va escoger por "defaults"
- Elegimos el provider que creamos: 'custom'
```
'defaults' =>[
    'guard' => 'custom',
    'passwords' => 'users',
],
```
