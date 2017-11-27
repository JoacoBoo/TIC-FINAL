<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/tic-final/backend/checklogged.php") ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administrador</title>
  </head>
  <body>
    <div class="goto categorialistado">
      <form class="ir" action="Categoria-Eliminar.php" method="get">
        <input type="submit" name="" value="Eliminar">
      </form>
    </div>
    <br>
    <div class="goto categoriaform">
      <form class="ir" action="Categoria-Form.php" method="get">
        <input type="submit" name="" value="Form">
      </form>
    </div>
    <br>
    <div class="goto categoriaeliminar">
      <form class="ir" action="Categoria-Listado.php" method="get">
        <input type="submit" name="" value="Listado">
      </form>
    </div>
  </body>
</html>
