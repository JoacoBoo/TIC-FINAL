<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/model/categoria.php');

class CategoriasDAO {

    public static function ObtenerPorID($id)
    {
      try
      {
          $conn = new PDO("mysql:host=127.0.0.1;port=3306;dbname=tp-final", "root", "root");
          $sql = "SELECT * FROM Categorias WHERE id = ".$id.";";
          $STH = $conn->prepare($sql);
          $STH->setFetchMode(PDO::FETCH_ASSOC);
          $STH->execute();
          $categoria = array();

          if ($STH->rowCount() > 0) {
              //RECORRO CADA FILA
              while($row = $STH->fetch()) {

                  $cat = new Categoria();
                  $cat->id =$row['id'];
                  $cat->nombre = $row['nombre'];
                  array_push($categoria, $cat);
              }
          }
          return $categoria;
      }
      catch(PDOException $e)
      {
           echo $sql . "<br>" . $e->getMessage();
      }
    }// get

    public static function ObtenerTodos()
    {
      try
      {
          $conn = new PDO("mysql:host=127.0.0.1;port=3306;dbname=tp-final", "root", "root");
          $query = "SELECT * from categorias";

          $categorias = array();

          $STH = $conn->prepare($query);
          $STH->setFetchMode(PDO::FETCH_ASSOC);

          $STH->execute();

          if ($STH->rowCount() > 0) {
              //RECORRO CADA FILA
              while($row = $STH->fetch()) {

                  $cat = new Categoria();
                  $cat->id =$row['id'];
                  $cat->nombre = $row['nombre'];
                  array_push($categorias, $cat);
              }
          }


          $conn=null;
          return $categorias;
      }
      catch(PDOException $e)
      {
           echo $sql . "<br>" . $e->getMessage();
      }
    }

    public static function agregar($item)
    {
      try
      {
        echo "hola";
        $conn = new PDO("mysql:host=127.0.0.1;port=3306;dbname=tp-final", "root", "root");
        echo "como";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "andas";
        $sql = "INSERT INTO categorias (nombre) VALUES ('".$item->nombre."');";
        echo "?";
        $conn->exec($sql);
        echo "bien";
        header("Location: ./index.php");
      }
      catch(PDOException $e)
      {
        echo $sql . "<br>" . $e->getMessage();
      }
    }// nuevo

    public static function modificar($item)
    {
      try
      {
        echo "hola";
        $conn = new PDO("mysql:host=127.0.0.1;port=3306;dbname=tp-final", "root", "root");
        echo "como";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "andas";
        $sql = "UPDATE categorias SET nombre = '".$item->nombre."' WHERE id = ".$item->id.";";
        echo "?";
        $conn->exec($sql);
        echo "bien";
        header("Location: ./index.php");
      }
      catch(PDOException $e)
      {
        echo $sql . "<br>" . $e->getMessage();
      }

    }// modificar

    public static function eliminar($id)
    {
      try
      {
        $conn = new PDO("mysql:host=127.0.0.1;port=3306;dbname=tp-final", "root", "root");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM categorias WHERE id = ".$id.";";

        $conn->exec($sql);
      }
      catch(PDOException $e)
      {
           //echo $sql . "<br>" . $e->getMessage();
      }
    }// eliminar

}

?>
