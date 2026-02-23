<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Actualizar Producto</title>
</head>
<body>
    <div class="container">
        <h1 class="container__title">Sistema de Gestor de Productos - PRODUX</h1>
    </div>

    <?php
        include "conexion.php";
        $cn = conectar();
        $Id = $_GET["id"];
        $sql = mysqli_query($cn, "call verproductoid($Id)");
        $row = mysqli_fetch_array($sql);
    ?>

    <div class="form">
        <h2 class="form__title">Actualizar Producto</h2>
        <form action="upd.php" method="Post">
            <input type="hidden" name="cod" value="<?php echo $row["Id"]?>">
            <div class="form__group">
                <label class="form__label">Nombre</label>
                <input type="text" name="name" class="form__input" value="<?php echo $row["Nombre"]?>">
            </div>
            <div class="form__group">
                <label class="form__label">Marca</label>
                <input type="text" name="marca" class="form__input" value="<?php echo $row["Marca"]?>">
            </div>
            <div class="form__group">
                <label class="form__label">Stock</label>
                <input type="number" name="stock" class="form__input" min="0" max="1000" value="<?php echo $row["Stock"]?>">
            </div>
            <div class="form__group">
                <label class="form__label">Precio</label>
                <input type="number" name="precio" class="form__input" min="0" max="9999" step="0.01" value="<?php echo $row["Precio"]?>">
            </div>
            <div class="form__actions">
                <input type="submit" class="btn btn--edit btn--full" value="Actualizar">
            </div>
            <a href="index.php" class="form__link">Volver al listado</a>
        </form>
    </div>
</body>
</html>