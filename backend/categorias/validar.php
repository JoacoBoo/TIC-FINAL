<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/tic-final/backend/checklogged.php") ?>

<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/dao/CategoriasDAO.php');
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/model/categoria.php');

$cat = new Categoria();
$cat->id = $_POST["id"];
$cat->nombre = $_POST["nombre"];

if ($cat->id > 0) {
  $query = CategoriasDAO::modificar($cat);

}
else {
  $query = CategoriasDAO::agregar($cat);
}

header("Location: Categoria-Listado.php");

?>
