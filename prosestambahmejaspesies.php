<?php 
include 'koneksi.php';
$notable = $_POST['notable'];
$capacity = $_POST['kapasitas'];


mysql_query("INSERT INTO mejaspesies VALUES('$notable','$capacity')");

header("location:berandaspesies.php?pesan=input");
?>