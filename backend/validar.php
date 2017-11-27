<?php
$usuario = $_POST["nombre"];
$pass = $_POST["pass"];
$mensaje = "el usuario esta ok";
if ($usuario == "admin" && $pass == "admin")
{
  session_start();
  $_SESSION["usuario"] = "logueado";
  header("Location: index.php");

}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php echo "<h1>". $mensaje."</h1>"; ?>
     <?php header("Location: login.php"); ?>
   </body>
 </html>
