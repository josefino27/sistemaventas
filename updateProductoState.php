<?php
require_once('conexion.php');
$ID = $_GET['ID'];
$updated=$mysqli->query("UPDATE producto SET estado = 1 WHERE ID = '$ID'");
if($updated){
    header("location: index.php");
}else echo "error, no logro actualizar el estado.";

      