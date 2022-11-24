<?php require_once'conexion.php';

$ID = $_GET['ID']; // ....... ----------------------- ...............
$Producto = $_POST['nombre']; // ....... ----------------------- ...............
$referencia = $_POST['referencia']; // ....... ----------------------- ...............
$precio = $_POST['precio']; // ....... ----------------------- ...............
$peso = $_POST['peso']; // ....... ----------------------- ...............
$categoria = $_POST['categoria']; // ....... ----------------------- ...............
$stock = $_POST['stock']; // ....... ----------------------- ...............   
$estado = $_POST['estado']; // ....... ----------------------- ...............   
    
if($Producto=="" || $referencia=="" || $precio=="" || $categoria==""|| $stock=="" || $estado=""){
  echo "*Debe llenar todos los campos.<br/>";
}else{
   
$sql = "UPDATE producto SET nombre_producto='$Producto',referencia='$referencia',precio='$precio',  peso='$peso',categoria='$categoria', stock='$stock', estado='$estado' WHERE ID='$ID'";

if ($mysqli->query($sql) === TRUE) {
  header('location: index.php');
   
  }
}

  
    
  
    
    
?>