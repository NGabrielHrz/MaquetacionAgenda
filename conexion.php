<?php
//XAMMP
$conexion = mysqli_connect("localhost", "root", "", "agenda");
//000WEBHOST
//$conexion = mysqli_connect("localhost", "id20819198_contactos", "apmoveiq1!A", "id20819198_agenda");

if (mysqli_connect_errno()) {
  die("Error de conexión a la base de datos: " . mysqli_connect_error());
}
?>