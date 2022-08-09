<!DOCTYPE html>
<html lang="es_Es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!--Enlace al stile predefinido comprimido(min)-->
    <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/style.css">
</head>

<body class="text-center">
    <h1 id="titulo">Servicio de orientacion laboral</h1>
<main class="form-log">
    <form action="" method="post">
    <img class="mb-4 " src="./vendor/twbs/bootstrap-icons/icons/person-circle.svg" alt="iconoUsuario" width="72" height="57">
    <h3 class="mb-3 fw-normal">Inicia sesion</h3>

    <!--Usuario-->
    <div class="form-floating">
      <input type="text" class="form-control" id="Usuario" name="usuario" placeholder="name@example.com">
      <label for="Usuario">Usuario</label>
    </div>

    <!--Clave-->
    <div class="form-floating">
      <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña">
      <label for="clave">Contraseña</label>
    </div>

    <!--Enviar-->
    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>

    <p class="mt-5 mb-3 text-muted">&copy; FormawebIV<br>2021-2022</p>
    </form>
</main>


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
        // echo "Usuario o contraseña no encontrados";
    }
}
?>