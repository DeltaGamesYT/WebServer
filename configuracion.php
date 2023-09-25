<?php

$db_host = "localhost:3306";
$db_username = "root";
$db_password = "1234";
$db_name = "galaxypvp";
$conexion = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if(mysqli_errno($conexion)){
    die("No se pudo conectar a la base de datos: " . mysqli_errno($conexion));
}

?>