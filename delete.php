<?php 
    include "conexion.php";
    $cn = conectar();
    $id = $_GET["id"];

    $sql = mysqli_query($cn, "call delproducto($id)");
    if($sql){
        Header("Location:index.php");
    }
?>