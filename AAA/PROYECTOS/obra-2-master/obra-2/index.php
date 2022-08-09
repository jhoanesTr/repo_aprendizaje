<!DOCTYPE html>
<html lang="es_Es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Servizo de Orientación Laboral</h1>

    <form action="" method="post">
        <h3>Inicio de sesion</h3>

        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario">

        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" id="clave">

        <button type="submit">Entrar
            <img src="" alt="">
        </button>
    </form>
</body>
</html>
<?php
#Consulta dentro del mismo archivo
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    require "./functions/conexion.php";
    $usuario= $_POST['usuario'];
    $clave= $_POST['clave'];
    
    #Peticion 
    $sql= "SELECT nome, clave #Columnas
            FROM usuarios #Tabla
            WHERE nome= :usuario #Condicion
            AND clave= :clave"; #Condicion
    $query= $conexion->prepare($sql);
        $query->bindParam(":usuario", $usuario);
        $query->bindParam(":clave", $clave);
    $query->execute();
    $sentencia= $query->fetch(PDO::FETCH_ASSOC);#Array indexado con key[nombre de la columna]
//!------------------------------------------------------------------------------------------
    if($sentencia){
                               #Dato obtenido de la columna User
        $_SESSION['Usuario'] = $sentencia["nome"];
        header("location:home.php");
    }else{
        echo "Usuario o contraseña no encontrados";
    }
}
?>