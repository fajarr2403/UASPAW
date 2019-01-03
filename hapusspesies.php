<?php 
include 'koneksi.php';
$meja = $_GET['meja'];
mysql_query("DELETE FROM bokingspesies WHERE meja='$meja'")or die(mysql_error());
 
header("location:berandaspesies.php?pesan=hapus");
?>