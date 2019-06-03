<?php
$mysqli = new mysqli('localhost', 'root', '', 'fisio');
$mysqli->set_charset("utf8");
if (!isset($mysqli))
{
    die("No se ha podido conectar a la BD: " . mysqli_error());
}else {
    //echo "conexion exitosa";
}
//session_start();