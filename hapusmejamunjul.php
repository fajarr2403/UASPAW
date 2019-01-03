<?php 
include 'koneksi.php';
$meja = $_GET['notable'];
mysql_query("DELETE FROM mejamunjul WHERE notable='$meja'")or die(mysql_error());
 
header("location:berandamunjul.php?pesan=hapus");
?>