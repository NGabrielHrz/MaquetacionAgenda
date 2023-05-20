<?php
session_start();
if ($_SESSION["autentificado"] != "SI"){
  header("location: ../Login.php");
  exit();
}
?>