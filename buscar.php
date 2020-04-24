<?php




require('conexion.php');
 
$buscar = $_POST['buscar'];

$sql = "SELECT * FROM  usuarios WHERE nombre = '$buscar'"; 

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
        <div class="tabla">
        <table>
            <thead>
                <th>Nombre</th><th>Apellido</th><th>Direccion</th><th>Telefono</th><th>Correo</th><th>Opciones</th>
            </thead>
            <tr>
                <td><?php echo $datoUsuario[1]; ?></td><td><?php echo $datoUsuario[2]; ?></td><td><?php echo $datoUsuario[3]; ?></td><td> <?php echo $datoUsuario[4]; ?>
                </td><td> <?php echo $datoUsuario[5]; ?></td>

                <td><a class="eliminar" href="eliminar.php?id=<?php echo $datoUsuario[0]; ?>">Eliminar</a>
            <a class="editar" href="editarUsuario.php">Editar</a></td>
            </tr>
        </table>
    </div>
    <?php endforeach ?>
    <a href="index.php">Regresar</a>
</body>

</html>