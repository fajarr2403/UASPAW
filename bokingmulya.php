<?php
   require_once("koneksi.php");
   $lokasi = "MULYA";
   $tabel = $_POST['table'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $date = $_POST['date'];
   $time = $_POST['time'];
   $cektable = mysql_query("SELECT * FROM bokingmulya WHERE meja = '$tabel'");
   if(mysql_num_rows($cektable) > 0) {
     echo "<div align='center'>meja sudah di pesan! <a href='reservasimulya.php'>Back</a></div>";
   } else {
     if(!$name || !$tabel) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='reservasimulya.php'>Back</a>";
     } else {
       $simpan = mysql_query("INSERT INTO bokingmulya (lokasi, meja , nama , email , tanggal , waktu) VALUES('$lokasi','$tabel','$name','$email','$date','$time')");
       if($simpan) {
         echo "<div align='center'>meja di boking silahkan <a href='dataspesies.php'>klik</a> untuk melihat daftar pesanan anda</div>";
       } else {
         echo "<div align='center'>boking gagal silahkan <a href='reservasimulya.php'>klik</a> untuk mengulanginya</div>";
       }
     }
   }
?>