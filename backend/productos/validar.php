<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/dao/ProductosDAO.php');
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/model/producto.php');

$cat = new Producto();
$cat->id = $_POST["id"];
$cat->nombre = $_POST["nombre"];
$cat->idCategoria = $_POST["idCategoria"];
$cat->precio = $_POST["precio"];
$cat->codigo = $_POST["codigo"];
$cat->descripcion = $_POST["descripcion"];
$cat->destacado = $_POST["destacado"];

if ($cat->id > 0) {
  $query = ProductosDAO::modificar($cat);

}
else {
  $query = ProductosDAO::agregar($cat);
}

//header("Location: Producto-Listado.php");

?>
