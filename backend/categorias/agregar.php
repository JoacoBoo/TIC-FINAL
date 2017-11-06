<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/dao/CategoriasDAO.php');
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/model/categoria.php');

$cat = new Categoria();
$cat->id = $_POST["id"];
$cat->nombre = $_POST["nombre"];
$query = CategoriasDAO::agregar($cat);

header("Location: Categoria-Listado.php");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
