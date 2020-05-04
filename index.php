<?php

//base de datos que se mostrara en el HTML

//conexion a la base de datos
require('conexion.php');

//se guarda la consulta de la base de datos
$sql = "SELECT * FROM  usuarios"; 

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

<form method="POST" action="registrar.php">
        <p>Nombre</p>
        <input type="text" name="nombre" placeholder="Ingresa nombre" class="input"><br>
        <p>Apellido</p> 
        <input type="text" name="apellido" placeholder="Ingresa apellido" class="input"><br>
        <p>Direccion</p>
        <input type="text" name="direccion" placeholder="Ingresa direccion" class="input"><br>
        <p>Telefono</p>
        <input type="text" name="telefono" placeholder="Ingresa telefono" class="input"><br>
        <p>Correo</p>
        <input type="text" name="correo" placeholder="Ingresa correo" class="input"><br>
        <button type="submit" class="boton">Registrar</button>
    </form><br>

    <form action="buscar.php" method="POST">
        <input type="text" name="buscar" placeholder="Buscar solo por nombre">
        <input type="submit" value="Buscar">
    </form><br>
  
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
            <a class="editar" href="editarUsuario.php?id=<?php echo $datoUsuario[0]; ?>">Editar</a></td>
            </tr>
        </table>
    </div>
    <?php endforeach ?>
</body>
</html>
