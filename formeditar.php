<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("conexion.php");
    
    $id = $_GET['id'];

    $sql="SELECT id, Nombre, Apellido, Fecha_nacimiento, Sexo, Correo FROM personas WHERE id=$id";
    $resultado = $con->query($sql);

    $row = $resultado->fetch_assoc();
    ?>

    <form action="edit.php" method="post">
    <label for="Nombre">Nombres:</label>
    <input type="text" name="Nombre" value="<?php echo $row['Nombre'];?>">
    <br>
    <label for="Apellido">Apellidos:</label>
    <input type="text"name="Apellido" value="<?php echo $row['Apellido'];?>">
    <br>
    <label for="Fecha_nacimiento">Fecha_nacimiento:</label>
    <input type="date" name="Fecha_nacimiento" value="<?php echo $row['Fecha_nacimiento'];?>">
    <br>
    <label for="Sexo">Sexo: </label>
    <input type="radio" name="Sexo" value="M"
    <?php echo $row['Sexo'] == 'M' ? 'checked': ''; ?>>Masculino
    <input type="radio" name="Sexo" value="F"
    <?php echo $row['Sexo'] == 'F' ? 'checked': '';?>>Femenino
    <br>
    <label for="Correo">Correo: </label>
    <input type="email" name="Correo" value="<?php echo $row['Correo'];?>">
    <br>
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">

    <input type="submit" value="Guardar">
    </form>
</body>
</html>