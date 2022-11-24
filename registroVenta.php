<?php
require_once('conexion.php');
$ID = $_GET['ID'];
$resultado = $mysqli->query("SELECT * FROM producto WHERE ID ='$ID'");
$row = $resultado->fetch_array();

// si presionan registrar se requiere validar campos en blancos y si el archivo es el formato correcto.
if (isset($_POST['registrarVenta'])) {
    require_once('validarFormatosVenta.php');
}
if (isset($_POST['back'])) {
    header('location:index.php');
}



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body class="container">
    <main>
        Registrar Venta
    </main>
    <!-- creamos formulario de datos personales y hv y foto de perfil  -->
    <form method="POST" enctype="multipart/form-data" name="form" action="">
        <fieldset>
            <legend>Datos personales</legend> <!-- datos personales ... -->
            <div>
                <label>Producto: *</label>
            </div>
            <div>
                <input name="producto" class="form-control" value=<?php echo $row['ID']; ?> disabled>
            </div>
            <div>
                <label>Cantidad: *</label>
            </div>
            <div>
                <input name="cantidad" class="form-control" type="number">
            </div>
            <br />
        </fieldset>
        <button type="submit" name="registrarVenta" class="btn btn-primary">Registrar</button> <!-- boton nos dirige a validar campos en blanco en php-->
        <input type="reset" value="limpiar" class="btn btn-warning">
    </form>
    <form action="" method="post">
        <input type="submit" name="back" value="atras" class="btn btn-warning">
    </form>

</body>

</html>