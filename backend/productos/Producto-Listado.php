<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/tic-final/backend/checklogged.php") ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    tr{
         margin-right: 15px;
    }
    table
    {
         border-width: 5px;
    }
    </style>
  </head>
  <body>

    <?php
    include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/dao/ProductosDAO.php');

    $productos = ProductosDAO::ObtenerTodos();
    ?>
    <h1>Productos</h1>
    <table style="border:1px solid black">
      <thead>
        <tr>ID</tr>
        <tr>NOMBRE</tr>
          <tr>idCategoria</tr>
          <tr>codigo</tr>
          <tr>precio</tr>
          <tr>destacado</tr>
               <tr>descripcion</tr>
                    <tr>descripcion</tr>
          <tr>descripcion</tr>
      </thead>

    <?php
    foreach ($productos as $pro)
    {
      ?>
      <tbody>
        <td><?php echo $pro->id; ?></td>
        <td><?php echo $pro->nombre; ?></td>
        <td><?php echo $pro->idCategoria; ?></td>
        <td><?php echo $pro->codigo; ?></td>
        <td><?php echo $pro->precio; ?></td>
        <td><?php echo $pro->destacado; ?></td>
        <td><?php echo $pro->descripcion; ?></td>
        <td><a href="Producto-Form.php?id=<?php echo $pro->id; ?>">Editar</a></td>
        <td><a href="Producto-Eliminar.php?id=<?php echo $pro->id; ?>">   Eliminar</a></td>
      </tbody>
      <?php
    }
    ?>

    </table>
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
