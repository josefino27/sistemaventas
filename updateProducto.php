<?php

require_once('conexion.php');
$ID = $_GET['ID'];
$resultado =$mysqli->query("SELECT * FROM producto WHERE ID ='$ID'");
$row=$resultado->fetch_array();

if(isset($_POST['back'])){
    header('location:index.php');
  }

if(isset($_POST['actualizar'])){
require_once('validarFormatosUpdate.php');
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario de registro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body class="container">
    
        <main>
            Actualizar datos del producto
        </main>

        <form  method="POST" enctype="multipart/form-data" action="">
            <fieldset>
                <legend>Caracteristicas</legend>
                  <div>
                <label>ID: *</label>
            </div>
            <div>
                <input value="<?php echo $row['ID'];?>" name="ID"class="form-control" disabled >
            </div>
            <div>
                <label>producto: *</label>
            </div>
            <div>
                <input value="<?php echo $row['nombre_producto'];?>" name="nombre"class="form-control" >
            </div>
            <div>
                <label>referencia: *</label>
            </div>
            <div>
                <input value="<?php echo $row['referencia'];?>" name="referencia" class="form-control">
            </div>
            
            <div>
                <label>precio: *</label>
            </div>
            <div>
                <input value="<?php echo $row['precio'];?>" name="precio" class="form-control">
            </div>
            <div>
                <label>peso: *</label>
            </div>
            <div>
                <input value="<?php echo $row['peso'];?>" name="peso" class="form-control">
            </div>
            <div>
                <label>categoria: *</label>
            </div>
            <div>
                <input value="<?php echo $row['categoria'];?>" name="categoria" class="form-control">
            </div>
            <div>
                <label>stock: *</label>
            </div>
            <div>
                <input value="<?php echo $row['stock'];?>" name="stock" class="form-control">
            </div>
            <div>
                <label>estado: *</label>
            </div>
            <div>
                <input value="<?php echo $row['estado'];?>" name="estado" class="form-control" disabled>
            </div>
        </fieldset>
        </br>
        <fieldset>
        <form method="post"></form>
              </br>
              </br>
        <button type="submit" name="actualizar" class="btn btn-primary" >actualizar</button>
        <button type="submit" name="back" class="btn btn-warning">cancelar</buttin>
        </form>
        
        </fieldset> 
        
    </body>
</html>