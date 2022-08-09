<?php
/* print "<pre>"; print_r($_REQUEST);//Si coloco: print "<pre>"; se ordena en filas*/

 
echo $_POST['nombredeusuario'];
//echo $_REQUEST['nombredeusuario'];
print "<pre>";
echo $_POST['email'];
//echo $_REQUEST['email'];
print "<pre>";
echo $_POST['contraseña'];
//echo $_REQUEST['contraseña'];

//Primero hay que entrar en formulario.html
//Lo rellenamos y a continuacion nos redirige a index.php