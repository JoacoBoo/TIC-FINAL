<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/tic-final/backend/checklogged.php") ?>

<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/dao/ProductosDAO.php');
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/model/producto.php');

$id = $_GET["id"];

ProductosDAO::eliminar($id);


header("Location: Producto-Listado.php");

?>
