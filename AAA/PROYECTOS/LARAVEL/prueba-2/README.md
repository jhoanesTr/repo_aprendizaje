##Configuraciones iniciales.
- En '.env' configuramos la base de datos.
- En config/app.php configuramos el idioma
##Login Breeze
```
composer require laravel/breeze --dev
php artisan breeze:install

npm install
npm run dev
```
A primera vista se modificaron los archivos:
- routes/auth.php
- routes/web.php
- resources/views/
  - auth
  - components
  - layouts
  - dashboard.blade.php

Ver ayuda en:
```
vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php
```

##Migrate
Configuré
- 'create_user_table'
- 'create_password_resets_table'
Anulé:
- 'create_failed_jobs_table'
