<?php

require "./conexion.php";

function login($logUser, $logClave){
$usuarioObtenido= obtenerUsuario($logUser);
    //!
    if ($usuarioObtenido === false){
    return false;
    }
    //*
    $palabraSecretaDeBaseDeDatos = $usuarioObtenido->logClave;
    $coinciden = coincidenPalabrasSecretas($logClave, $palabraSecretaDeBaseDeDatos);
    //!
    if (!$coinciden) {
        return false;
    }
    //*
    iniciarSesion($usuarioObtenido);
    return true;
}
    function obtenerUsuario($logUser){#obtenerUsuarioPorCorreo
        $dbconect= obtenerdb();
        $sentencia= $dbconect->prepare("SELECT Usuario, Clave FROM usuarios WHERE Usuario = ? LIMIT 1;");
        $sentencia->execute([$logUser]);
        return $sentencia->fetchObject();
    }
    function iniciarSesion($logUser){
        session_start();
        $_SESSION["logUser"]= $logUser->usuario;
    }
function coincidenPalabrasSecretas($logClave, $palabraSecretaDeBaseDeDatos)
{
    return password_verify($logClave, $palabraSecretaDeBaseDeDatos);
}
function hashearPalabraSecreta($logClave)
{
    return $logClave;
}





//TODO Para el registro
/*
//?Comprobamos si el usuario existe
function usuarioExiste($logUser){
    #Hacemos qu la funcion obtenerdb se convierta en una variable
    $dbconect= obtenerdb();
    $sentencia= $dbconect->prepare("SELECT Usuario FROM usuarios WHERE logUser = ? LIMIT 1;");
    $sentencia->execute([$logUser]);
    return $sentencia->rowCount()>0;
}*/
