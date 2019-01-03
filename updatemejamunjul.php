<?php 

include 'koneksi.php';
$notable = $_POST['notable'];
$capacity = $_POST['kapasitas'];


mysql_query("UPDATE mejamunjul SET notable='$notable', kapasitas='$capacity' WHERE notable='$notable'");

header("location:berandamunjul.php?pesan=update");
?>