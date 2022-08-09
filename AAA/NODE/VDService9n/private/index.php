<?php
#Consulta dentro del mismo archivo
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    require "./functions/conect.php";
    $uadmin= $_POST['admin'];
    $clave= $_POST['clave'];
    
    #Peticion 
    $sql= "SELECT User, Pass #Columnas
            FROM usuarios #Tabla
            WHERE User= :uadmin
            AND Pass= :clave";
    $query= $bd->prepare($sql);
        $query->bindParam(":uadmin", $uadmin);
        $query->bindParam(":clave", $clave);
    $query->execute();
    $sentencia= $query->fetch(PDO::FETCH_ASSOC);#Array indexado con key[nombre de la columna]
//!------------------------------------------------------------------------------------------
    if($sentencia){            #Dato obtenido de la columna User
        $_SESSION['Usuario'] = $sentencia["User"];
        header("location:db.php");
        print_r($_SESSION) ;#Array ( [Usuario] => jhoanes )
    }else{
        echo "<p>Usuario o contraseña no encontrados</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es_Es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <h2>Eres admin?</h2>
        <label for="admin">Usuario:</label>
        <input type="text" name="admin" id="admin">

        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" id="clave">

        <button type="submit">Entrar<img src="" alt=""></button>
    </form>
</body>
</html>