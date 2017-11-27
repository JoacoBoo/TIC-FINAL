<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/tic-final/backend/checklogged.php") ?>

<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/dao/CategoriasDAO.php');
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/model/categoria.php');

$cat = new Categoria();
$cat->id = $_GET["id"];

CategoriasDAO::eliminar($cat->id);


header("Location: Categoria-Listado.php");

?>
