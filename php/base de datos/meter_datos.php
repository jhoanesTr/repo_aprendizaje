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

    //Insertamos valores a la tabla
    $sql= "INSERT INTO Trabajadores (Nombre, Usuario, Clave)
    VALUES ('Juan', 'juanito1', 'perez0')";

    $conexion->exec($sql);
    echo "<br>Datos creados";
}
    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    $conexion = null;