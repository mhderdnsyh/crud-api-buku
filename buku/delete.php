<?php 
  include_once "../koneksi.php";

  header("Content-Type: application/json; charset=UTF-8");

  $isbn = $_POST['isbn'];
  $delete = "DELETE FROM `buku` WHERE isbn = $isbn";
  $execute = $connection->query($delete);
  $response = [];

  if ($execute) {
    $response['status'] = 'sukses';
    $response['message'] = 'data sukses didelete';
  } else {
    $response['status'] = 'gagal';
    $response['message'] = 'data gagal didelete';
  }

  $json = json_encode($response, JSON_PRETTY_PRINT);
  echo $json;

?>