<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/tic-final/backend/checklogged.php") ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <?php
    include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/dao/ProductosDAO.php');
    include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/model/producto.php');

    $query = array();

    $pro = new Producto();
    $eseditar = "agregar.php";
    if (isset($_GET["id"])) {
      $eseditar = "editar.php";
      $query = ProductosDAO::ObtenerPorID($_GET["id"]);
      foreach ($query as $proe)
      {
        $pro->id = $proe->id;
        $pro->nombre = $proe->nombre;
        $pro->precio = $proe->precio;
        $pro->codigo = $proe->codigo;
        $pro->idCategoria = $proe->idCategoria;
        $pro->destacado = $proe->destacado;
        $pro->descripcion = $proe->descripcion;

      }
      echo "<br>";
    }
     ?>
     <h1>Formulario</h1>
    <form class="formularioprincipal" action="validar.php" method="post">
         <input type="text" name="nombre" value="<?php echo $pro->nombre ?>">
         <br>
         <br>
         <input type="text" name="idCategoria" value="<?php echo $pro->idCategoria ?>">
         <br>
         <br>
         <input type="text" name="codigo" value="<?php echo $pro->codigo ?>">
         <br>
         <br>
         <input type="text" name="precio" value="<?php echo $pro->precio ?>">
         <br>
         <br>
         <input type="text" name="destacado" value="<?php echo $pro->destacado ?>">
         <br>
         <br>
         <input type="text" name="descripcion" value="<?php echo $pro->descripcion ?>">
         <br>
         <br>
         <input type="hidden" name="id" value="<?php echo $pro->id ?>">
         <br>
         <br>
         <input type="submit" name="" value="Aceptar">
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1>Categorias por id</h1>
    <?php
    include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/backend/categorias/Categoria-Listado.php');
     ?>
  </body>
</html>
