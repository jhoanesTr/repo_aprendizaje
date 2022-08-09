<?php
$servername= "localhost"; 
$username= "lucas";
$clave= "lucas123";
$dbname= "unadbpdo";

try{
    $conexion= new PDO("mysql:host=$servername;dbname=$dbname", $username, $clave);
    echo "Conexion realizada";

    //Establecemos el modo error de PDO en execpcion
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Inicio transacciones
    $conexion->beginTransaction();

    //Transaccion
    $conexion->exec("INSERT INTO Trabajadores (Nombre, Usuario, Clave)
    VALUES ('Elias', 'el1s', 'castro')");
    $conexion->exec("INSERT INTO Trabajadores (Nombre, Usuario, Clave)
    VALUES ('Sergio', 'segi0', 'okey')");

    //Confirmar transacciones
    $conexion->commit();
    echo "<br>Varios datos intoducidos";
}
    catch(PDOException $e) {
        // roll back the transaction if something failed
        $conexion->rollback();
        echo "Error: " . $e->getMessage();
      }
$conexion = null;