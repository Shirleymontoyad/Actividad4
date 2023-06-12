<?php

/* Creacion de una constante la cual nos guardara la ruta del proyecto */

include_once('function.php'); /* Conexion del archivo de funciones */

if(!defined('ROOT')){
    define("ROOT", 'http://'.$_SERVER['HTTP_HOST'].getFolderProject());
} /* Funcion que permite guardar la URL principal de mis archivos php o html */

