<?php
require_once('conexion.php');
$ID = $_GET['ID'];
$deleted=$mysqli->query("DELETE FROM venta WHERE ID = '$ID'");
if($deleted){
    $mysqli->query("DELETE FROM producto WHERE ID = '$ID'");
    header("location: index.php");
}else echo "error, no logro eliminar el producto.";

      