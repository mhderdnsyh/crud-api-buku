<?php 
include_once '../koneksi.php';

header("Content-Type: application/json; charset=UTF-8");

$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$abstrak = $_POST['abstrak'];

$insert = "INSERT INTO `buku`(`isbn`,`judul`,`pengarang`,`jumlah`,`tanggal`,`abstrak`) VALUES ('$isbn','$judul','$pengarang','$jumlah','$tanggal','$abstrak')";
$execute = $connection->query($insert);
$response = [];

if ($execute) {
  $response['status'] = 'sukses';
  $response['message'] = 'data sukses ditambahkan';
} else {
  $response['status'] = 'gagal';
  $response['message']= 'data gagal ditambahkan';
}
$json = json_encode($response,JSON_PRETTY_PRINT);
echo $json;

// mysqli_query($connection,$insert);
?>