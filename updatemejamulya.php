<?php 

include 'koneksi.php';
$notable = $_POST['notable'];
$capacity = $_POST['kapasitas'];


mysql_query("UPDATE mejamulya SET notable='$notable', kapasitas='$capacity' WHERE notable='$notable'");

header("location:berandamulya.php?pesan=update");
?>