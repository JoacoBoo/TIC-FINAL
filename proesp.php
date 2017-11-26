<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Item - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">JOAQUIN BOROVICH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">La tiendita de 6IB</h1>
          <h2>Visualizador</h2>
          <div class="list-group">
            <a href="index.php" class="list-group-item">Productos destacados</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

<?php
include_once ('/dao/ProductosDAO.php');
include_once ('model/producto.php');

$id = $_GET["id"];
$pro = ProductosDAO::ObtenerPorID($id);
var_dump($pro[0]);


?>

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
            <div class="card-body">
              <h3 class="card-title"><?php echo $pro[0]->nombre ?></h3>
              <h4>$<?php echo $pro[0]->precio ?></h4>
              <p class="card-text"><?php echo $pro[0]->descripcion ?></p>
              <span class="text-warning">Codigo: <?php echo $pro[0]->codigo ?></span>

            </div>
          </div>
          <br>
          <br>

          <!-- /.card -->


        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
