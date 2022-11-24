<?php

include_once('conexion.php');

if (
  isset($_GET['ID']) &&
  isset($_POST['cantidad'])
) {
  $result = $mysqli->query("select stock from producto where ID = '".$_GET['ID']."'");
  $row = $result->fetch_assoc();
  if ($row['stock']>0) {

    $mysqli->query("INSERT INTO  venta (
            ID_producto,cantidad
        )
        VALUES(
         '" . $_GET['ID'] . "',
         '" . $_POST['cantidad'] . "'
        )
      ");

      header("location: index.php");
  } 
  if($row['stock']<=0) { $mysqli->query("UPDATE producto set stock = 0 where ID = '".$_GET['ID']."'");
  echo "<script>alert('Error, no es posible realizar la venta, el stock se encuentra en cero.');
        window.location='index.php'</script>;";}
} else {
  echo "ERROR al crear la venta";
}


