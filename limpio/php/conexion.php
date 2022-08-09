<?php

function obtenerdb(){

$dbhost="localhost";
$dbname="concello";
$dbuser="lucas";
$dbclave="lucas123";

    try{
        $dbconect= new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbclave);
        #
        $dbconect->query("set names utf8;");
        $dbconect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        #
        $dbconect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbconect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $dbconect;
    }catch(PDOException $e){
        return null;
    }
}