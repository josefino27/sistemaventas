<?php
require_once 'conexion.php';
$users = $_GET["buscar"];
if($documento!=""){
    $buscar=getOneUser($documento);
    foreach($users as $user):
    echo $user['documento'];
    echo $user['nombre'];echo $user['correo'];echo $user['direccion'];echo $user['telefono'];
    endforeach
;
}else{
    header("location: index.php");
    echo "porfavor ingresa documento valido.";
}


?>