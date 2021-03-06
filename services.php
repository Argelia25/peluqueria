<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');



  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Servicios</title>
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <style>
.table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
  <body>
	  <?php include_once('includes/header.php');?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/1-bg.jpg'); height:50%" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        
          <div class="col-md-9 ftco-animate pb-5">
          <span  ><img style="width: 35%; height:35%" src="images/logoprincipal.jpg" alt=""></span>
            <h2 style="color: purple;" class="mb-0 bread">Servicios</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Servicios <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
       

    <section class="ftco-section ftco-pricing">
			<div class="container">
				<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
           <h2 style="color: purple;"  class="mb-4">Costos de Nuestros Servicios</h2>
            <p>Tenemos gran variedadde servicios</p>
          </div>
        </div>
        <center>
        <table class="table"> 
          <thead> 
            <tr> 
              <th>No.</th> 
              <th>Servicios</th> 
              <th>Precios</th> 
            </tr> 
          </thead>
           <tbody>
             <!--con el siguiente query le pedimo que nos traiga los datos 
             de la tabla serviocios para mostrarlos en la vista drl cliente, en froma de arreglo para su ejor comrencion-->
            <?php
            $ret=mysqli_query($con,"select *from  tblservices");
            $cnt=1;
            while ($row=mysqli_fetch_array($ret)) {

            ?>
              <!--le pedimos que nos coloque los dados en las columas y filas de la tabla establecida-->
              <tr> 

              <th scope="row"><?php echo $cnt;?></th> 
              <!--mandamos llamar el nombre del servicio-->
              <td><?php  echo $row['ServiceName'];?></td> 
               <!--mandamos llamar el costo del servicio-->
              <td><?php  echo $row['Cost'];?></td> </tr>   <?php 
            $cnt=$cnt+1;
            }?></tbody> 
          </table> 
          </center>
        </div>
      </section>

    <?php include_once('includes/footer.php');?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>