<?php 
include 'koneksi.php';
$meja = $_GET['meja'];
mysql_query("DELETE FROM bokingmunjul WHERE meja='$meja'")or die(mysql_error());
 
header("location:berandamunjul.php?pesan=hapus");
?>