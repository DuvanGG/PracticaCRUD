<?php

require('conexion.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];


$sql = "INSERT INTO usuarios (nombre, apellido, direccion, telefono, correo) VALUES (?,?,?,?,?)";

$stm = $conexion->prepare($sql);

$stm -> bind_param('sssss', $nombre, $apellido, $direccion, $telefono, $correo);
$stm -> execute();


header('Location: index.php');

?>