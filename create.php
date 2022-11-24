<?php include_once('conexion.php');

if(
        isset($_POST['nombre_producto']) &&
        isset($_POST['referencia']) &&
        isset($_POST['precio']) &&
        isset($_POST['peso']) &&
        isset($_POST['categoria']) &&
        isset($_POST['stock'])
        ){ 
            $mysqli->query("INSERT INTO  producto (
                nombre_producto,referencia,precio,peso,categoria,stock
            )
            VALUES(
             '".$_POST['nombre_producto']."',
             '".$_POST['referencia']."',
             '".$_POST['precio']."',
             '".$_POST['peso']."',
             '".$_POST['categoria']."',
             '".$_POST['stock']."'
            )
          ");
        }else{ echo "ERROR al inertar usuario";}

header("location: index.php");

?>
