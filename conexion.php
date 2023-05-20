<?php

$conexion = mysqli_connect("localhost", "root", "", "usuarios");


if (mysqli_connect_errno()) {
  die("Error de conexión a la base de datos: " . mysqli_connect_error());
}
?>