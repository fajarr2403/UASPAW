<?php 
include 'koneksi.php';
$meja = $_GET['notable'];
mysql_query("DELETE FROM mejamulya WHERE notable='$meja'")or die(mysql_error());
 
header("location:berandamulya.php?pesan=hapus");
?>