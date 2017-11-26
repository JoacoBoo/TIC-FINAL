<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/dao/ProductosDAO.php');
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/model/producto.php');

$pro = new Producto();
$pro->id = $_POST["id"];
$pro->nombre = $_POST["nombre"];
$query = ProductosDAO::modificar($pro);

header("Location: Producto-Listado.php");


?>
