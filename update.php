<h1>ACTUALIZAR PRODUCTO</h1>
<?php
    include "conexion.php";
    $cn = conectar();
    $Id = $_GET["id"];

    $sql = mysqli_query($cn, "call verproductoid($Id)");
    $row = mysqli_fetch_array($sql);

?>
<form action="upd.php" method="Post">
    <input type="hidden" name="cod" value="<?php echo $row["Id"]?>">
    <input type="text" name="name"  value="<?php echo $row["Nombre"]?>">
    <input type="text" name="marca" value="<?php echo $row["Marca"]?>">
    <input type="number" name="stock"  min=0 max=1000 value="<?php echo $row["Stock"]?>">
    <input type="number" name="precio" min=0 max=9999 value="<?php echo $row["Precio"]?>">
    <input type="submit"  value="enviar">
</form>