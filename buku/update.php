<?php

use function PHPSTORM_META\type;

  include_once "../koneksi.php";

  header("Content-Type: application/json; charset=UTF-8");

  $isbn = $_POST['isbn'];
  $judul = $_POST['judul'];
  $pengarang = $_POST['pengarang']; 
  $jumlah = $_POST['jumlah'];
  $tanggal = $_POST['tanggal'];
  $abstrak = $_POST['abstrak'];

  $update = "UPDATE `buku` SET `judul`='$judul', `pengarang`='$pengarang', `jumlah`='$jumlah', `tanggal`='$tanggal', `abstrak`='$abstrak' WHERE `isbn`='$isbn'";
  $execute = $connection->query($update);
  $response = [];

  if ($execute) {
    $response['status'] = 'sukses';
    $response['message'] = 'data sukses diupdate';
  } else {
    $response['status'] = 'gagal';
    $response['message'] = 'data gagal diupdate';
  }

  $json = json_encode($response, JSON_PRETTY_PRINT);
  echo $json;



?>