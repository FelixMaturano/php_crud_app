<?php include("conexion.php");
$sql = "SELECT id, Nombre, Apellido, Fecha_nacimiento, Sexo, Correo FROM personas"; 
$resultado = $con->query($sql);
?>

<table style = "border-collapse: collapse" border="1">
    <thead>
        <tr>
            <th width = "100px">Nombres</th>
            <th width = "150px">Apellidos</th>
            <th width = "60px">Fecha_nacimiento</th>
            <th width = "10px">Sexo</th>
            <th width = "150px">Correo</th>
            <th>Operaciones</th>
        </tr>
    </thead>
    <?php
    while($row = mysqli_fetch_array($resultado)){
    ?>
    <tr>
        <td><?php echo $row['Nombre'];?></td>
        <td><?php echo $row['Apellido'];?></td>
        <td><?php echo $row['Fecha_nacimiento'];?></td>
        <td><?php echo $row['Sexo'];?></td>
        <td><?php echo $row['Correo'];?></td>

        <td><a href="formeditar.php?id=<?php echo $row['id'];?>"> Editar </a><a href = "delete.php?id=<?php echo $row['id'];?>"> Eliminar </a></td>
    </tr>
   <?php }?>
</table>

<a href = "forminsertar.html">Insertar</a>