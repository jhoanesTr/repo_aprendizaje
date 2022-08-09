<!DOCTYPE html>
<html lang="es-Es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
</head>
<body>
    <h1>Citas</h1>
    <h3><?php echo '<h5>Bienvenido - ' .$_SESSION["usuario"].'</h5'; ?></h3>

    <ul><li><a href="cerrar-sesion.php">Cerrar sesion</a></li></ul>
</body>
</html>
<?php
if(isset($_SESSION["usuario"])){
}else{
    header("location:login.php");
}
?>