<?php
// si presionan registrar se requiere validar campos en blancos y si el archivo es el formato correcto.
if (isset($_POST['registrar'])) {
    require_once('validarFormatosProducto.php');
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
        Registrar Producto
    </main>
    <!-- creamos formulario de datos personales y hv y foto de perfil  -->
    <form method="POST" enctype="multipart/form-data" name="form" action="">
        <fieldset>
            <legend>Caracteristicas: </legend> <!-- datos personales ... -->
            <div>
                <label>Producto: *</label>
            </div>
            <div>
                <input name="nombre_producto" class="form-control">
            </div>
            <div>
                <label>referencia: *</label>
            </div>
            <div>
                <input name="referencia" class="form-control">
            </div>
            <br />
            <div>
                <label>precio: *</label>
            </div>
            <div>
                <input name="precio" class="form-control">
            </div>
            <br />
            <div>
                <label>peso: *</label>
            </div>
            <div>
                <input name="peso" class="form-control">
            </div>
            <br />
            <div>
                <label>categoria: *</label>
            </div>
            <div>
                <input name="categoria" class="form-control">
            </div>
            <br />
            <div>
                <label>stock: *</label>
            </div>
            <div>
                <input name="stock" class="form-control">
            </div>
            <br />
        </fieldset>
        <button type="submit" name="registrar" class="btn btn-primary">Registrar</button> <!-- boton nos dirige a validar campos en blanco en php-->
        <input type="reset" value="limpiar" class="btn btn-warning">
    </form>
    <form action="" method="post">
        <input type="submit" name="back" value="atras" class="btn btn-warning">
    </form>

</body>

</html>