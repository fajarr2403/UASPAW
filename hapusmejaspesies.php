<?php 
include 'koneksi.php';
$meja = $_GET['notable'];
mysql_query("DELETE FROM mejaspesies WHERE notable='$meja'")or die(mysql_error());
 
header("location:berandaspesies.php?pesan=hapus");
?>