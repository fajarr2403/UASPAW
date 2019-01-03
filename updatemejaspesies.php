<?php 

include 'koneksi.php';
$notable = $_POST['notable'];
$capacity = $_POST['kapasitas'];


mysql_query("UPDATE mejaspesies SET notable='$notable', kapasitas='$capacity' WHERE notable='$notable'");

header("location:berandaspesies.php?pesan=update");
?>