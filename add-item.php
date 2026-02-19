<?php
    $name = $_POST["name"];
    $marca = $_POST["marca"];
    $stock = $_POST["stock"];
    $precio = $_POST["precio"];

    include "conexion.php";
    $cn = conectar();

    $sql = mysqli_query($cn, "Call addproducto('$name', '$marca', $stock, $precio)");

    if($sql){
        Header("Location: index.php");
    }
?>