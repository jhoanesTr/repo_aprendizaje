<?php

class UnaClase{
    public static function unMetodo(){
        echo "Esto es un método estático";
    }
}

$obj= new UnaClase();
//$obj->unMetodo(); //Forma normal(Incorrecta pero funciona)

UnaClase::unMetodo();   //Forma para static

