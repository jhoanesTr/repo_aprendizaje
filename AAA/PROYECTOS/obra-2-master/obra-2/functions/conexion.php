<?php
$dbuser= "root"; #Usuario de la base
$dbpass= ""; #Contaseña de la base
$servidor= "localhost"; #Localhost
$bd= "obra"; #Nombre de la base
    try{
        $conexion= new PDO("mysql:dbname=obra;host=localhost", $dbuser, $dbpass);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexion realizada";
    }catch(PDOException $e){
        echo "Error de conexion con la Base de datos".$e->getMessage();
    }