<?php
require "seguridad.php";
// session_start();
// $user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda Telefonica</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <head>
    <div class="head2">
      <h1>AGENDA TELEFONICA</h1>
    </div>
  </head>
  <div class="newContact">
    <h2>NUEVO CONTACTO</h2>
    <hr>
  </div>
  <nav class="menu2">
    <a class="Menu2" href="index.php">Inicio</a> |
    <a class="Menu2" href="Verlista.php">Ver lista</a>
  </nav>
  <article class="article2">
    <br>
    <form action="guardar_contacto.php" class="form" method="POST">
      <label class="generalLabel">Nombre:</label>
      <input type="text" name="Nombre" id="Nombre"><br>
      <label class="generalLabel">Apellido:</label>
      <input type="text" name="Apellido" id="Apellido"><br>
      <label class="generalLabel">Email:</label>
      <input type="text" name="Email" id="Email"><br>
      <label class="generalLabel">Celular:</label>
      <input type="tel" name="Telefono" id="Telefono" maxlength="10"><br>
      <label class="generalLabel">Compañia:</label>
      <input type="radio" name="Compania" id="Telcel" value="Telcel">
      <label>Telcel</label>
      <input type="radio" name="Compania" id="AT&T" value="AT&T">
      <label>AT&T</label>
      <input type="radio" name="Compania" id="Movistar" value="Movistar">
      <label>Movistar</label><br>
      <label class="generalLabel">Parentesco</label>
      <select name="Parentesco" id="Parentesco">
        <option value="">Escoje una opcion</option>
        <option value="Escuela">Escuela</option>
        <option value="Familia">Familia</option>
        <option value="Amigo">Amigo</option>
        <option value="Contacto">Contacto</option>
      </select><br><br>
      <button class="Btn" type="submit">Guardar Contacto</button>
      <button class="Btn" type="reset">Borrar Datos</button>
    </form>
  </article>
  <footer class="foot2"></footer>
</body>
</html>