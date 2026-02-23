<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Producto</title>
</head>
<body>
    <div class="container">
        <h1 class="container__title">Sistema de Gestor de Productos - PRODUX</h1>
    </div>
    
    <div class="table ">
        <table>
            <thead>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>MARCA</th>
                <th>STOCK</th>
                <th>PRECIO</th>
                <th><a href="add.html" class="btn btn--add btn--sm">Agregar</a></th>
                <th></th>
            </thead>
            <Tbody>
                <?php
                    include "conexion.php";
                    $cn = conectar();
                    $sql = mysqli_query($cn, "CALL verproductos()");
                        while($row=mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <th><?php echo $row["Id"]?></th>
                            <th><?php echo $row["Nombre"]?></th>
                            <th><?php echo $row["Marca"]?></th>
                            <th><?php echo $row["Stock"]?></th>
                            <th><?php echo number_format(floor($row["Precio"] * 100) / 100, 2)?></th>
                            <th><a href="update.php?id=<?php echo $row["Id"]?>" class="btn btn--edit btn--sm">update</a></th>
                            <th><a href="delete.php?id=<?php echo $row["Id"]?>" class="btn btn--delete btn--sm">delete</a></th>
                        </tr>

                        <?php
                        }
                ?>

            </Tbody>
        </table>
    </div>
</body>
</html>