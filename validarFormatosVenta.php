<?php 
require_once('conexion.php');

// traemos los datos de la venta 
    $ID = $_GET['ID']; // ....... ----------------------- ...............
    $cantidad = $_POST['cantidad']; // ....... ----------------------- ...............
    
    if($ID=="" || $cantidad==""){
      echo "*Debe llenar todos los campos.<br/>";
    }else{require_once 'createVenta.php';} 
       
    
    
?>