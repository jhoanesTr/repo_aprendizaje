<?php
require '../functions/conexion.php';
session_start();
if(isset($_SESSION['Usuario'])){
?>
<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <title>Ofertas</title>
</head>

<body>
<?php include "../components/header.php" ?>  

<?php include "../components/footer.php" ?> 
</body>
</html>

<?php
}else{
    header("location:../index.php");
}
?>