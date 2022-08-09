<?php

// Base de datos
$host= "localhost"; //127.0.0.1
$dbname= "prueba";
$usuario= "root";
$contraseña= "";

// PDO
try {           //Intenta esto
    $mbd= new PDO("mysql:host=$host;dbname=$dbname", $usuario, $contraseña);
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected <br>";

    //Insertar dentro del intento a conexión
    // $sql= "INSERT INTO `album` (`ID`, `Nombre`, `Apellido`)
    //         VALUES ('1', 'Jhoanes', 'Villarroel');";
    // $mbd->exec($sql);
    
} catch (PDOException $e) {      //Si hay un error, haz esto
    echo "Conexión no establecida <br>".$e;
}