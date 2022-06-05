<?php 
  include_once '../koneksi.php';


  // @var $koneksi PDO

  $query = "SELECT * FROM buku";
  $statement = $connection->query($query);
  $statement->setFetchMode(PDO::FETCH_OBJ);
  $result = $statement->fetchAll(); 

  header('Content-type: application/json');
  echo json_encode($result);




?>