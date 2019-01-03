<?php 
include 'koneksi.php';
$notable = $_POST['notable'];
$capacity = $_POST['kapasitas'];


mysql_query("INSERT INTO mejamunjul VALUES('$notable','$capacity')");

header("location:berandamunjul.php?pesan=input");
?>