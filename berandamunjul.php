<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
             <link rel="stylesheet" href="js/bootstrap.min.js">
             <link rel="stylesheet" href="css/style.css">
           <link href="css/animate.css" rel="stylesheet"/>
           <link href="css/waypoints.css" rel="stylesheet"/>
           <script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
           <script src="js/waypoints.js" type="text/javascript"></script>
             <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
           <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
             
    <title>ADMIN MUNJUL</title><link rel="icon" href="images/LOGOU.png" />
</head>
<body>
<nav class="navbar navbar-expand-sm  bg-light  sticky-top">
                    <a class="navbar-brand" href="#">
                            <img src="images/LOGOU.png" alt="logo" style="width:40px;">
                          </a>
                    <ul class="navbar-nav">
                      <li class="nav-item" >
                        <a class="nav-link disabled" href="logout.php" >LOGOUT</a>
                      </li>
                     
                    </ul>
                  </nav>
                  <?php 
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "Data berhasil di input.";
	}else if($pesan == "update"){
		echo "Data berhasil di update.";
	}else if($pesan == "hapus"){
		echo "Data berhasil di hapus.";
	}
}
?>
  <h2>DATA MEJA YANG DI BOKING</h2>
      <table class="table table-dark">
                            
                              <tr>
                                <th>NO TABLE</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>DATE</th>
                                <th>TIME</th>
                                <th>AKSI</th>
                                
                               
                              </tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM bokingmulya")or die(mysql_error());
		
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $data['meja'] ?></td>
			<td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['tanggal']; ?></td>
            <td><?php echo $data['waktu']; ?></td>
            <td>
				
				<a class="hapus" href="hapusmulya.php?meja=<?php echo $data['meja']; ?>">HAPUS</a>					
			</td>
			
        </tr>
		<?php } ?>
    </table>

  <br></br>
  <br></br>

  <h2>DATA MEJA YANG DISEDIAKAN</h2>

  <table class="table table-dark">
                            
                            <tr>
                              <th>NO TABLE</th>
                              <th>CAPACITY</th>
                              <th>ACTION</th>

                              
                             
                            </tr>
  <?php 
  include "koneksi.php";
  $query_mysql = mysql_query("SELECT * FROM mejamulya")or die(mysql_error());
  
  while($data = mysql_fetch_array($query_mysql)){
  ?>
  <tr>
    <td>TABLE <?php echo $data['notable'] ?></td>
    <td><?php echo $data['kapasitas']; ?> PERSON</td>
          
          <td>
      
      <a class="hapus" href="hapusmejamunjul.php?notable=<?php echo $data['notable']; ?>">HAPUS |</a>
      <a class="edit" href="editmejamunjul.php?notable=<?php echo $data['notable']; ?>">EDIT</a>					
    </td>
    
      </tr>
      
  <?php } ?>
  </table>
  <a href="tambahmejamulya.php"><h2>TAMBAH MEJA</h2></a>

    <!-- copyright -->
<div class="cpy-right text-center pt-5">
    <p>© 2018 SPESIES COFFE. All rights reserved | Design by HEINNEKEN
      
    </p>
  </div>
  <!-- //copyright -->
</div>
</body>
</html>