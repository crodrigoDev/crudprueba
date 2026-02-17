<?php
    include "conexion.php";
    $cn = conectar();

    $id = $_POST["cod"];
    $nombre = $_POST["name"];
    $marca = $_POST["marca"];
    $stock = $_POST["stock"];
    $precio = $_POST["precio"];

    $sql = mysqli_query($cn, "call updproducto($id, $nombre, $marca, $stock, $precio)");

    if($sql){
        Header("Location:index.php");
    }
?>