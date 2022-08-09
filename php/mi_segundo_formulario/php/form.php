<?php

//print "<pre>"; print_r($_REQUEST);//De prueba

//Declaramos variables
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$telefono = $_POST['telefono'];

//Hacemos una prueba
/*echo "<p>Hola $nombre $apellidos</p>";
echo "<p>Te llegará un mail al siguiente correo: 
        $email para verificar el usuario $usuario";*/

//Hacemos una prueba mas avanzada
if ($nombre =="") {//Si el campo $nombre está vacio 
    echo "Faltan datos por rellenar";
}
else{echo "<p>Hola $nombre $apellidos</p>";
    echo "<p>Te llegará un mail al siguiente correo: 
    $email para verificar el usuario $usuario";

}