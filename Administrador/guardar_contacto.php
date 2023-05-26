<?php
require "conexion.php";

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$email = $_POST['Email'];
$telefono = $_POST['Telefono'];
$compania = $_POST['Compania'];
$parentesco = $_POST['Parentesco'];

$rutaEnServidor = 'fotos';

$rutaTemporal = $_FILES ['imagen']['tmp_name'];
$nombreImagen = $_FILES ['imagen']['name'];
$tipoFoto = $_FILES ['imagen']['type'];

date_default_timezone_set('UTC');
$nombreimagenunico = date('Y-m-d H-i-s') . "-" . $nombreImagen;

$rutaDestino = $rutaEnServidor . "/" . $nombreimagenunico;

if ($tipoFoto == "image/jpeg" or $tipoFoto == "image/png" or $tipoFoto == "image/gif" or $tipoFoto == "image/webp" or $tipoFoto == "image/jpg" or $tipoFoto == "image/svg"){
  move_uploaded_file($rutaTemporal, $rutaDestino);
} else {
  echo '
  <script>
    alert("No es una imagen");
    window.history.go(-1);
  </script>
  ';
  exit;
}

$nombre = mysqli_real_escape_string($conexion, $nombre);
$apellido = mysqli_real_escape_string($conexion, $apellido);
$email = mysqli_real_escape_string($conexion, $email);
$telefono = mysqli_real_escape_string($conexion, $telefono);
$compania = mysqli_real_escape_string($conexion, $compania);
$parentesco = mysqli_real_escape_string($conexion, $parentesco);


$sql = "INSERT INTO AgendaTelefonica (ruta_foto, Nombre, Apellido, Correo, Celular, Compania, Parentesco) VALUES ('$rutaDestino','$nombre', '$apellido', '$email', '$telefono', '$compania', '$parentesco')";


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
