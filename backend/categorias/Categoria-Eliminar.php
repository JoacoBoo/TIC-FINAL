<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/dao/CategoriasDAO.php');
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/model/categoria.php');

$cat = new Categoria();
$cat->id = $_POST["id"];

CategoriasDAO::eliminar($cat);


header("Location: Categoria-Listado.php");

?>
