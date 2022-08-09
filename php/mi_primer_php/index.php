<?php
echo "Hola mundo";
//Esa fue la primera frase

echo "Ultima frase";
//Aqui termina echo
///////////////////////////

$personas = 20;//Numero "entero o INT" de personas en el trabajo
if (is_int($personas)) {
    echo $personas;
}//Si la "variable personas" es un entero: imprimir

$esto_es_rojo;
$esto_es_amarillo;
$esto_es_rojo = TRUE;//Booleano en modo "VERDADERO" "1"
$esto_es_amarillo = FALSE;//Booleano en modo "FALSO" "0"
echo ($esto_es_rojo ? "true\n" : "false\n");//Imprime el resutado
/////////////////////////////////////////////////////////////////
var_dump($personas);//Imprime lo que es, en este caso: int (20)
var_dump($esto_es_amarillo);//Imprime lo que es, en este caso: bool (false)
/////////////////////////////////////////////////////////////////

function test()//Declaramos una funcion
{
    global $esto_es_rojo, $personas;//Llamamos a las variables que vayamos usar
    echo $personas;
}
test();//Ejecutamos la funcion
////////////////////////////////////////////////////////////////
