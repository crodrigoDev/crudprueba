<?php
function conectar(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crudprueba";

    $cn = mysqli_connect($host, $username, $password);

    mysqli_select_db($cn, $dbname);

    return $cn;
}
    
?>