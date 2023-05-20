<?php
require "conexion.php";

$user = $_POST['user'];
$password = $_POST['contra'];
$sql = "SELECT * FROM usuarios WHERE user = '$user' AND contrasena = '$password'";

$result = $conexion->query($sql);

if ($result->num_rows == 1) {
    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['autentificado'] = "SI";
  header("Location: Administrador/index.php");
} else {
  echo
  '<script>
    alert("ERROR EN LA AUTENTIFICACION");
    location.href = "Login.php?errorusuario=SI"
  </script>'
  ;
}

$conexion->close();
?>