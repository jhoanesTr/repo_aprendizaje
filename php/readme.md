<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
1. $_SERVER["PHP_SELF"] envía los datos del formulario enviado a la página misma, en lugar de saltar a una página diferente. De esta forma, el usuario recibirá mensajes de error en la misma página que el formulario.
2. htmlspecialchars() convierte los caracteres especiales en entidades HTML. Esto significa que reemplazará caracteres HTML como <and> con &lt; and &gt;

1. trim() elimina un espacio adicional, tabulaciones y nuevas lineas
2. stripslashes() elimina las barras invertidas