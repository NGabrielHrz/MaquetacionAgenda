<?php

$conexion = mysqli_connect("localhost", "root", "", "agenda");


if (mysqli_connect_errno()) {
  die("Error de conexión a la base de datos: " . mysqli_connect_error());
}
?>