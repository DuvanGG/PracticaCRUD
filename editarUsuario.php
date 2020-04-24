<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<body>
    <form method="POST" action="editar.php">
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
        <button type="submit" class="boton">Actualizar</button>
    </form>
    
</body>
</html>