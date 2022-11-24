<?php
require_once('conexion.php');
$where = "";
$result = $mysqli->query("SELECT * FROM producto");
if (!empty($_POST)) {
    $valor = $_POST['buscar_input'];
    if (!empty($valor)) {
        $where = "WHERE ID ='$valor'";
    }
    $result = $mysqli->query("SELECT * FROM producto $where");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>INICIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body class="container-fluid">
    <div class="p-3 mb-2 bg-light text-dark">
        <div class="row">
            <div class="col">
                <form action="" method="POST">
                    <tr>
                        <td>
                            <input type="TEXT" name="buscar_input" id="buscar_input" placeholder="ID PRODUCTO">
                        </td>
                        <input type="submit" value="buscar" id="buscar_btn" name="buscar_btn" class="btn btn-info">
                        <td>
                        </td>
                    </tr>
                </form>
            </div>
            <div class="col">
                <a href="registroProducto.php" class="btn btn-success">Nuevo Producto</a>
            </div>
            <div class="col">
                <h3><span>Sistema Registro de Ventas</span></h3>
            </div>
        </div>
    </div>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>producto</th>
            <th>referencia</th>
            <th>precio</th>
            <th>peso</th>
            <th>categoria</th>
            <th>stock</th>
            <th>creado</th>
            <th>Estado</th>
            <th>Accion</th>

        </tr>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td>
                        <?php echo $row['ID'] ?>
                    </td>
                    <td>
                        <?php echo $row['nombre_producto'] ?>
                    </td>
                    <td>
                        <?php echo $row['referencia'] ?>
                    </td>
                    <td>
                        <?php echo $row['precio'] ?>
                    </td>
                    <td>
                        <?php echo $row['peso'] ?>
                    </td>
                    <td>
                        <?php echo $row['categoria'] ?>
                    </td>
                    <td>
                        <?php echo $row['stock'] ?>
                    </td>
                    <td>
                        <?php echo $row['creado'] ?>
                    </td>
                    <td>
                        <?php
                        if ($row['estado'] == 0) {
                            echo $row['estado'] == 0 ? 'activo' : 'inactivo';
                        }
                        else {
                            echo $row['estado'] == 1 ? 'inactivo' : 'activo';
                        };
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($row['estado'] == 0) { ?>
                            <a href="registroVenta.php?ID=<?php echo $row['ID']; ?>" class="btn btn-success">Vender</a>
                            <a href="updateProductoState.php?ID=<?php echo $row['ID']; ?>">cambiar estado</a>

                        <?php
                        };
                        ?>
                        <?php if ($row['estado'] == 1) { ?>
                        <a href="deleteProducto.php?ID=<?php echo $row['ID']; ?>">eliminar</a>
                        <?php }?>
                        <a href="updateProducto.php?ID=<?php echo $row['ID']; ?>">editar</a>
                    </td>
                <?php
            }
                ?>
        </tbody>
    </table>
</body>

</html>