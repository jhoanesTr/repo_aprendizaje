<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | Esta opción controla la autenticación predeterminada "guardia" y contraseña.ord
    | opciones de restablecimiento para su aplicación. Puede cambiar estos valores predeterminados
    | según sea necesario, pero son un comienzo perfecto para la mayoría de las aplicaciones.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | A continuación, puede definir cada guardia de autenticación para su aplicación.
    | Por supuesto, se ha definido una excelente configuración predeterminada para usted
    | aquí, que utiliza el almacenamiento de sesiones y el proveedor de usuarios de Eloquent.
    |
    | Todos los controladores de autenticación tienen un proveedor de usuarios. Esto define cómo el
    | los usuarios se recuperan de su base de datos u otro almacenamiento
    | mecanismos utilizados por esta aplicación para conservar los datos de su usuario.
    |
    | Compatible: "sesión"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | Todos los controladores de autenticación tienen un proveedor de usuarios. Esto define cómo el
    | los usuarios se recuperan de su base de datos u otro almacenamiento
    | mecanismos utilizados por esta aplicación para conservar los datos de su usuario.
    |
    | Si tiene varias tablas de usuarios o modelos, puede configurar varios
    | Fuentes que representan cada modelo/tabla. Estas fuentes pueden entonces
    | asignarse a cualquier guardia de autenticación adicional que haya definido.
    |
    | Compatible: "base de datos", "elocuente"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'usuarios',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | Puede especificar varias configuraciones de restablecimiento de contraseña si tiene más
    | más de una tabla de usuario o modelo en la aplicación y desea tener
    | configuraciones de restablecimiento de contraseña separadas según los tipos de usuario específicos.
    |
    | El tiempo de caducidad es la cantidad de minutos que cada token de reinicio será
    | considerado válido. Esta función de seguridad hace que los tokens duren poco, por lo que
    | tienen menos tiempo para ser adivinados. Puede cambiar esto según sea necesario.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Aquí puede definir la cantidad de segundos antes de una confirmación de contraseña
    | se agota y se le pide al usuario que vuelva a ingresar su contraseña a través del
    | pantalla de confirmación De forma predeterminada, el tiempo de espera dura tres horas.
    |
    */

    'password_timeout' => 10800,

];
