<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>MARCA</th>
            <th>STOCK</th>
            <th>PRECIO</th>
            <th><a href="add.php">Agregar</a> </th>
        </thead>
        <Tbody>
            <?php
                include "conexion.php";
                $cn = conectar();
                $sql = mysqli_query($cn, "CALL verproductos()");
                $row = mysqli_num_rows($sql);
                    while($row=mysqli_fetch_array($sql)){
                        
                    ?>
                    <tr>
                        <th><?php echo $row["Id"]?></th>
                        <th><?php echo $row["Nombre"]?></th>
                        <th><?php echo $row["Marca"]?></th>
                        <th><?php echo $row["Stock"]?></th>
                        <th><?php echo $row["Precio"]?></th>
                        <th><a href="update.php?id=<?php echo $row["Id"]?>" >update</a></th>
                        <th><a href="delete.php?id=<?php echo $row["Id"]?>" >delete</a></th>
                    </tr>

                    <?php
                    }
            ?>

        </Tbody>
    </table>
</body>
</html>