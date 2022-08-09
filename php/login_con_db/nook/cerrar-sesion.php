<?php
  session_start();

  // Elimina la sesion.
  session_destroy();
   
  // Redirecciona a la página de login.
  header("Location: login.php");