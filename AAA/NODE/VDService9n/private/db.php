<?php
session_start();
if(isset($_SESSION['Usuario'])){
?>
<!DOCTYPE html>
<html lang="es_Es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
</head>
<body>
    <h1>Bienvenido a tu base de datos</h1>
    <button type="submit">
        <a href="functions/salir.php">
            Cerrar sesion
        </a>
        <img src="" alt="">
    </button>
</body>
</html>
<?php
}else{
    header("location:../index.php");
}
?>