<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/tic-final/backend/checklogged.php") ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administrador</title>
  </head>
  <body>
    <div class="goto productolistado">
      <form class="ir" action="Producto-Eliminar.php" method="get">
        <input type="submit" name="" value="Eliminar">
      </form>
    </div>
    <br>
    <div class="goto productoform">
      <form class="ir" action="Producto-Form.php" method="get">
        <input type="submit" name="" value="Form">
      </form>
    </div>
    <br>
    <div class="goto productoeliminar">
      <form class="ir" action="Producto-Listado.php" method="get">
        <input type="submit" name="" value="Listado">
      </form>
    </div>
  </body>
</html>
