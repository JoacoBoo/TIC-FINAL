<?php require("checklogged.php") ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administrador</title>
  </head>
  <body>
    <div class="goto productolistado">
      <form class="ir" action="categorias/" method="get">
        <input type="submit" name="" value="Categorias">
      </form>
    </div>
    <br>
    <div class="goto productoform">
      <form class="ir" action="productos/" method="get">
        <input type="submit" name="" value="Productos">
      </form>
      <br>
      <br>
      <form class="ir" action="cerrar.php" method="get">
        <input type="submit" name="" value="Cerrar Sesion">
      </form>
    </div>
  </body>
</html>
