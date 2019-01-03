<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $email = $_POST['email'];
   $no_telepon = $_POST['no_telepon'];
   $password = $_POST['pass'];
   $cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
   if(mysql_num_rows($cekuser) > 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     } else {
       $simpan = mysql_query("INSERT INTO user (username, email , no_telepon , pass) VALUES('$username','$email','$no_telepon','$password')");
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>