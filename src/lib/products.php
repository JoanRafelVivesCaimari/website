<?php

class Productes{

  public function getProductes($id): array{
    $conn =\ DatabaseConnection::connect();

    $sql = "SELECT id_producte, nom, preu
            FROM Producte
            WHERE id_categoria ='$id'
            ORDER BY 1";
    $stmt= $conn->query($sql, \PDO::FETCH_ASSOC);
    $stmt->execute();
    $productes=$stmt->fetchALL(\PDO::FETCH_ASSOC);

    return $productes;
  }
  public function getInfoProductes($id)
  {
    $conn =\ DatabaseConnection::connect();

    $sql = "SELECT *
            FROM Producte
            WHERE id_producte ='$id'";
    $stmt= $conn->prepare($sql);
    $stmt->execute();
    $productes=$stmt->fetchALL(\PDO::FETCH_ASSOC);

    return $productes;
  }
}
 ?>
