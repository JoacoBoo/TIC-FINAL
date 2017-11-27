<?php
session_start();
if (isset($_SESSION['usuario']))
{
  //nada
}
else {
  header("Location: http://localhost/tic-final/backend/login.php");
  //header("Location: http://www.google.com");
}
 ?>
