<?php




require('conexion.php');
 
$id = $_GET['id'];

$sql = "SELECT * FROM  usuarios WHERE id = '$id'"; 

$resultado = mysqli_query($conexion, $sql); 

$resultado_bd = mysqli_fetch_all($resultado); #busca todo, esto devuelve un array 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>



    <?php foreach($resultado_bd as $datoUsuario): ?>
       <form method="POST" action="editar.php">
        <p>Nombre</p>
        <input type="text" name="nombre" value="<?php echo $datoUsuario[1]; ?>"><br>
        <p>Apellido</p> 
        <input type="text" name="apellido" value="<?php echo $datoUsuario[2]; ?>"><br>
        <p>Direccion</p>
        <input type="text" name="direccion" value="<?php echo $datoUsuario[3]; ?>"><br>
        <p>Telefono</p>
        <input type="text" name="telefono" value="<?php echo $datoUsuario[4]; ?>"><br>
        <p>Correo</p>
        <input type="text" name="correo" value="<?php echo $datoUsuario[5]; ?>"><br>
         <input type="hidden" name="id" value="<?php echo $datoUsuario[0]; ?>"><br>
        <button type="submit" class="boton">Actualizar</button>
    </form><br>
    <?php endforeach ?>
