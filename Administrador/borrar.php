<?php

if (isset($_GET["id"])) {

  $id = $_GET["id"];
  require "conexion.php";

  $borrar_usuario = "DELETE FROM agendatelefonica WHERE ID = $id";

  if ($conexion->query($borrar_usuario) === TRUE) {
    echo
    '<script>
      alert("Se borro el registro correctamente");
      location.href = "Verlista.php";
    </script>';
  } else {
    echo
    '<script>
      alert("No se pudo borrar el registro correctamente: ");
      location.href = "Verlista.php";
    </script>' . $conexion->error;
  }

  $conexion->close();
} else {
  echo "No se proporcionó el parámetro 'id' en la URL.";
}
