<?php

    if ($_POST['usuario'] == "lucas21xj" and $_POST["contraseña"] == "formaweb"){
        header("Location: home.html");
    }
    else{
        header("Location: error.html");
    }
    echo "Nombre: Lucas";