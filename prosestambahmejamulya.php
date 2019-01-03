<?php 
include 'koneksi.php';
$notable = $_POST['notable'];
$capacity = $_POST['kapasitas'];


mysql_query("INSERT INTO mejamulya VALUES('$notable','$capacity')");

header("location:berandamulya.php?pesan=input");
?>