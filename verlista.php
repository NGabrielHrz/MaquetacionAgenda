<?php
require "Administrador/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda Telefónica</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <div class="head2">
      <h1>AGENDA TELEFÓNICA</h1>
    </div>
  </header>
  <div class="newContact">
    <h2>VER LISTA</h2>
    <hr>
  </div>
  <nav class="menu2">
    <a class="Menu2" href="index.php">Inicio</a>
  </nav>
  <article class="article2">
  <table class="tablaU">
      <tr>
        <th align="center">Foto</th>
        <th align="center">ID</th>
        <th align="center">NOMBRE</th>
        <th align="center">APELLIDO</th>
        <th align="center">CORREO</th>
        <th align="center">CELULAR</th>
        <th align="center">COMPAÑÍA</th>
        <th align="center">PARENTESCO</th>
      </tr>
      <?php
      $todos_usuarios = "SELECT * FROM agendatelefonica ORDER BY ID ASC";
      $result = $conexion->query($todos_usuarios);
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td align='center'><img src='Administrador/" . $row["ruta_foto"] . "'class='fotoChica'></td>";
        echo "<td align='center'>" . $row["ID"] . "</td>";
        echo "<td align='center'>" . $row["Nombre"] . "</td>";
        echo "<td align='center'>" . $row["Apellido"] . "</td>";
        echo "<td align='center'>" . $row["Correo"] . "</td>";
        echo "<td align='center'>" . $row["Celular"] . "</td>";
        echo "<td align='center'>" . $row["Compania"] . "</td>";
        echo "<td align='center'>" . $row["Parentesco"] . "</td>";
      ?>
      <?php
      }
      mysqli_free_result($result);
      ?>
    </table>
  </article>
  <footer class="foot2"></footer>
</body>

</html>