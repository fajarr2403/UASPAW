<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
<!Doctype html>
<html>
<head>
	<title>BERANDA</title><link rel="icon" href="images/LOGOU.png" />
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Cafestore Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
</head>
<body>
<nav class="navbar navbar-expand-sm  bg-light  sticky-top">
		<a class="navbar-brand" href="beranda.php">
				<img src="images/LOGOU.png" alt="logo" style="width:40px;">
			  </a>
		<ul class="navbar-nav">
		  <li class="nav-item" >
			<a class="nav-link disabled" href="beranda.php" >HOME</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link disabled" href="aboutuslog.html">ABOUT US</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link disabled" href="listlog.html">LIST</a>
      </li>
      <li class="nav-item">
			<a class="nav-link disabled" href="logout.php">LOGOUT</a>
      </li>

		  
		</ul>
	  </nav>

<div class="banner">
	<div class="container">
		<div class="banner-info text-center">

			<h1>WELCOME TO PESANMEJA.COM</h1>
			<p>CARI TEMPATNYA BOKING MEJANYA NIKMATI HIDANGANNYA</p>
		</div>
	</div>
</div>

<center><h1>DAFTAR TEMPAT</h1></center>
<div class="banner-bottom">
		<div class="bottom-info">

			<p>SPESIES COFFE</p>
			<div class="join"><a class="hvr-bounce-to-bottom button" href="reservasispesies.php">BOOKING</a></div>
    
  </div>
  
  
    <div class="bottom-info">
     
      <p>WARTEG MULYA</p>
      <div class="join"><a class="hvr-bounce-to-bottom button" href="reservasimulya.php">BOOKING</a></div>
    
  </div>

 
  <div class="bottom-info">
   
    <p>CAFE MUNJUL</p>
    <div class="join"><a class="hvr-bounce-to-bottom button" href="reservasimunjul.php">BOOKING</a></div>
  </div>

</div>

		
<footer>
<div class="cpy-right ">
    <p>© 2018 PESANMEJA.COM. All rights reserved | Design by HEINNEKEN
      
    </p>
  </div>

</footer>
    </body>
</html>