<?php
$servername= "localhost"; 
$username= "lucas";
$clave= "lucas123";
$dbname= "unadbpdo";

try{
    //Cremos la base de datos, conectamos y configuramos una conexion persistente
    $conexion= new PDO("mysql:host=$servername;dbname=$dbname",$username, $clave);
    
    //Establecemos el modo error de PDO en execpcion
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Creamos una tabla SQL
    $sql= "CREATE TABLE Trabajadores (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(30) NOT NULL,
    Usuario VARCHAR(10) NOT NULL,
    Clave VARCHAR(15) NOT NULL)";

    //use exec() porque no se encuentran resultados
    $conexion->exec($sql);
    echo "Tabla Trabajadores creada correctamente";
}
    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    $conexion = null;