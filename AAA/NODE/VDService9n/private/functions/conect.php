<?php
$dbuser= "root";
$dbpass= "";
    try{
        $bd= new PDO('mysql:dbname=vdservice;host=localhost', $dbuser, $dbpass, array(PDO::ATTR_PERSISTENT=>TRUE));
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexion realizada";
    }catch(PDOException $e){
        echo "Error de conexion con la Base de datos".$e->getMessage();
    }