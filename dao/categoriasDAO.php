<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tic-final/model/categoria.php');

class CategoriasDAO {

    public static function ObtenerPorID($id)
    {
      try
      {
          $conn = new PDO("mysql:host=127.0.0.1;port=3306;dbname=tp-final", "root", "root");
          $sql = $sql = "DELETE FROM categorias WHERE id = '".$id."';";
          $query = $conn->query($sql);
          $conn=null;
          return $query;
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

    public static function eliminar($id, $item)
    {
      try
      {
        $id = $_POST["id"];
        $conn = new PDO("mysql:host=127.0.0.1;port=3306;dbname=tp-final", "root", "root");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($id != null)
        {
          $sql = $sql = "DELETE FROM categorias WHERE id = '".$id."';";
        }
        else
        {
          $sql = $sql = "DELETE FROM categorias WHERE id = '".$item->id."';";
        }
        $conn->exec($sql);
        echo true;
      }
      catch(PDOException $e)
      {
           //echo $sql . "<br>" . $e->getMessage();
           echo false;
      }
    }// eliminar

}

?>
