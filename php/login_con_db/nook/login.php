<!DOCTYPE html>
<html lang="es-Es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <h3>Login de Usuarios</h3>
        <label for="usuario">Usuario</label>
        <input type="" name="usuario" id="usuario">
        <label for="contraseña">Contraseña</label>
        <input type="" name="contraseña" id="contraseña">
        <input type="submit" name="" value="Entrar">
    </form>
<?php
    session_start();
//Datos sacados del formulario
$usuario= $_POST['usuario'];
$contraseña= $_POST['contraseña'];

//Datos para conectar a la base de datos.
$servername= "localhost"; 
$username= "lucas";
$clave= "lucas123";
$dbname= "unadbpdo";

try{
    //Cremos la base de datos, conectamos y configuramos una conexion persistente
    $conexion= new PDO("mysql:host=$servername;dbname=$dbname",$username, $clave, array(PDO::ATTR_PERSISTENT =>true));
    echo "Conexion realizada";

    //Establecemos el modo error de PDO en execpcion
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Consulta a la db
    $query = $conexion->prepare("SELECT * FROM Trabajadores WHERE Usuario = :usuario AND Clave = :contraseña");
    $query->bindParam(":usuario", $usuario);
    $query->bindParam(":contraseña", $contraseña);
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);
    if($resultado){
        $_SESSION["usuario"] = $resultado["Usuario"];
        header("Location: citas.php");
    }else{
        echo "Usuario o contraseña incorrectos";
    }

}catch(PDOException $e){
        echo "Error de conexion!";
        exit;
    }
return $conexion;
?>
</body>
</html>
