<?php
require "conexion.php";

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$email = $_POST['Email'];
$telefono = $_POST['Telefono'];
$compania = $_POST['Compania'];
$parentesco = $_POST['Parentesco'];

$nombre = mysqli_real_escape_string($conexion, $nombre);
$apellido = mysqli_real_escape_string($conexion, $apellido);
$email = mysqli_real_escape_string($conexion, $email);
$telefono = mysqli_real_escape_string($conexion, $telefono);
$compania = mysqli_real_escape_string($conexion, $compania);
$parentesco = mysqli_real_escape_string($conexion, $parentesco);

$sql = "INSERT INTO AgendaTelefonica (Nombre, Apellido, Correo, Celular, Compania, Parentesco) VALUES ('$nombre', '$apellido', '$email', '$telefono', '$compania', '$parentesco')";
if (mysqli_query($conexion, $sql)) {
  echo
  '<script>
    alert("El contacto se guardo correctamente");
    location.href = "nuevo.php";
  </script>'
  ;
} else {
  echo
  '<script>
    alert("ERROR: No se guardo correctamente el contacto");
    location.href = "nuevo.php"
  </script>'
  . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
