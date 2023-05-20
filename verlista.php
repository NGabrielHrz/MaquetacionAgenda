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
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>CORREO</th>
        <th>CELULAR</th>
        <th>COMPAÑÍA</th>
        <th>PARENTESCO</th>
      </tr>
      <?php
      $todos_usuarios = "SELECT * FROM agendatelefonica ORDER BY ID ASC";
      $result = $conexion->query($todos_usuarios);
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["Nombre"] . "</td>";
        echo "<td>" . $row["Apellido"] . "</td>";
        echo "<td>" . $row["Correo"] . "</td>";
        echo "<td>" . $row["Celular"] . "</td>";
        echo "<td>" . $row["Compania"] . "</td>";
        echo "<td>" . $row["Parentesco"] . "</td>";
        echo "</tr>";
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