<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <?php
    include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/dao/CategoriasDAO.php');
    include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/model/categoria.php');

    $query = array();

    $cat = new Categoria();
    $eseditar = "agregar.php";
    if (isset($_GET["id"])) {
      $eseditar = "editar.php";
      $query = CategoriasDAO::ObtenerPorID($_GET["id"]);
      foreach ($query as $cate)
      {
        $cat->id = $cate->id;
        $cat->nombre = $cate->nombre;
      }
      echo "<br>";
    }
     ?>
    <form class="formularioprincipal" action="validar.php" method="post">
      <input type="text" name="nombre" value="<?php echo $cat->nombre ?>">
      <input type="hidden" name="id" value="<?php echo $cat->id ?>">
      <input type="submit" name="" value="Aceptar">
    </form>
  </body>
</html>
