<?php
session_start();
if (isset($_SESSION['usuario']))
{
  header("location: index.php");
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="login" action="validar.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="">
        <br>
        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" value="">
        <input type="submit" name="" value="Ingresar">

    </form>
  </body>
</html>
