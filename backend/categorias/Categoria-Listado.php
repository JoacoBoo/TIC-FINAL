<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/dao/CategoriasDAO.php');

    $categorias = CategoriasDAO::ObtenerTodos();
    ?>
    <table style="border:1px solid black">
      <thead>
        <tr>ID<tr>
        <tr>  NOMBRE<tr>
      </thead>

    <?php
    foreach ($categorias as $cat)
    {
      ?>
      <tbody>
        <td><?php echo $cat->id; ?></td>
        <td><?php echo $cat->nombre; ?></td>
      </tbody>
      <?php
    }
    ?>

    </table>
  </body>
</html>
