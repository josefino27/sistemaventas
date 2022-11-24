<?php

$mysqli = new mysqli("localhost","root","","productos_db");
$mysqli->query("SET NAMES utf8");
if(!$mysqli){
    echo "ERROR DE CONEXION";                                     
}

?>