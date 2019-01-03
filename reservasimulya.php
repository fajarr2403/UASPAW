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
             
    <title>RESERVASI SPESIES</title><link rel="icon" href="images/LOGOU.png" />
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
    

                 <div class="container-fluid" >
                  <div class="row">
                      <div class="col-sm-6  os-animation"data-os-animation="bounceInUp" data-os-animation-delay="0s" style="border-right: solid 2px; border-color:#bf9b30" >
                      <div class="container">
                               
                          <table class="table table-dark">
                              
                              <tr>
                                  <th>NO TABLE</th>
                                  <th>CAPACITY</th>
                                 
    
                                  
                                 
                                </tr>
      <?php 
      include "koneksi.php";
      $query_mysql = mysql_query("SELECT * FROM mejamulya")or die(mysql_error());
      
      while($data = mysql_fetch_array($query_mysql)){
      ?>
      <tr>
        <td>TABLE <?php echo $data['notable'] ?></td>
        <td><?php echo $data['kapasitas']; ?> PERSON</td>
              
              
        
          </tr>
          
      <?php } ?>
      </table>
                        </div>
                      </div>
                         
                    <div class="col-sm-6  os-animation"data-os-animation="bounceInUp" data-os-animation-delay="0.25s" >
                      <h4>CREATE BOOKING</h4>
                      
                        <form action="bokingmulya.php" method="post">
                            <div class="form-group">
                              
                              <select class="form-control" id="table" name="table" placeholder="INPUT NO TABLE" name="table">
                                <?php
                                    $query_mysql = mysql_query("SELECT * FROM mejamulya")or die(mysql_error());
      
                                    while($data = mysql_fetch_array($query_mysql)){
                                    ?>     
                                      <option>TABLE <?php echo $data['notable'] ?></option>
                                    <?php } ?>
                            </select>
                            </div>
                           
             
                
                  <div class="form-group d-flex justify-content-center">
                    <input type="text" class="form-control" id="name" name="name" placeholder="ENTER YOUR NAME" name="name">
                  </div>
                
                
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" class="form-control" id="email" name="email" placeholder="ENTER YOUR EMAIL" name="email">
                    </div>
                  
               
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" class="form-control" id="date" name="date" placeholder="DATE(tgl/bln/thn)(10102010)" name="date">
                    </div>
               
                  
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" class="form-control" id="time" name="time" placeholder="TIME(jam/menit)(1010)" name="time">
                    </div>
                 
                      
                      <button type="submit"  class="btn btn-primary btn-block" >BOOKING</button>
                      <br></br>
                      <a href="datamulya.php"><button type="button"  class="btn btn-primary btn-block" >CEK TABLE</button></a>
                    </form>
                    </div>
                    

                    </div>
                  </div>
                  
                      

<!-- copyright -->
<div class="cpy-right text-center pt-5">
    <p>© 2018 SPESIES COFFE. All rights reserved | Design by HEINNEKEN
      
    </p>
  </div>
  <!-- //copyright -->
</div>
</footer>


</body>
</html>