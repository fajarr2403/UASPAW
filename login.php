

<?php
session_start();
if(isset($_SESSION['username'])) {
header('location:beranda.php'); }
require_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>

<title>LOGIN</title><link rel="icon" href="images/LOGOU.png" />
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
             <meta charset="utf-8">
             <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
            
     </head>
    <body >
 
            <nav class="navbar navbar-expand-sm  bg-light  sticky-top">
                    <a class="navbar-brand" href="index.html">
                            <img src="images/LOGOU.png" alt="logo" style="width:40px;">
                          </a>
                    <ul class="navbar-nav">
                      <li class="nav-item" >
                        <a class="nav-link disabled" href="index.html" >HOME</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="aboutus.html">ABOUT US</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="list.html">LIST</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="admin.html">LOGIN ADMIN</a>
                      </li>

                    </ul>
                  </nav>
	<!-- main -->

		<div class="header-main">
		<h2>Login Now</h2>
			<div class="header-bottom">
				<div class="header-right w3agile">
					<div class="header-left-bottom agileinfo">
						<form action="proseslogin.php" method="post">
							<div class="icon1">
								<input type="text" placeholder="Enter Username" name="username"  autocomplete=’off’/>
							</div>
							<div class="icon1">
								<input type="password" placeholder="Enter Password" name="pass" required=""/>
							</div>
							
							<div class="bottom">
								<input type="submit" value="LOGIN" />
							</div>
							<P>belum memiliki akun ?</P>
							<p><a href="daftar.php">DAFTAR SEKARANG</a></p>
					</form>	
					</div>
				</div>
			</div>
	</div>

	
	<!-- //main -->
	<!-- copyright -->
	<div class="cpy-right ">
    <p>© 2018 PESANMEJA.COM. All rights reserved | Design by HEINNEKEN
      
    </p>
  </div>
	<!-- //copyright --> 
</body>
</html>