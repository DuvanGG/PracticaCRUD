<?php

require('conexion.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$id = $_POST['id'];

$sql = "UPDATE usuarios SET nombre = ? , apellido = ?, direccion = ?, telefono = ?, correo = ? WHERE id = '$id'";

$stm = $conexion->prepare($sql);

$stm -> bind_param('sssss', $nombre, $apellido, $direccion, $telefono, $correo);
$stm -> execute();

header('Location: index.php');

?>
