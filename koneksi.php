<?php

 $dbserver = 'localhost';
 $dbname = 'kuliahweb';
 $dbuser = 'root';
 $dbpassword = '020627';
 
 $dsn = "mysql:host={$dbserver};dbname={$dbname}";

 
 try {
   $connection = new PDO($dsn, $dbuser, $dbpassword);
 } catch (Exception $exception){
    die("Terjadi error: {$exception->getMessage()}");
 }

// $conn = mysqli_connect($dsn,$dbuser,$dbpassword) or die('Not Connect');


?>