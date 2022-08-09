<?php

$logUser= $_POST["logUser"];
$logClave= $_POST["logClave"];

require "./funciones.php";

$login= login($logUser, $logClave);
if($login){
    header("Location: ../public/citas.html");
    exit;
}else{
    header("Location: ../index.html");
    print "Usuario o contraseña incorrectos";
}