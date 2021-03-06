<?php 
//incluimos la coneccion a la base de datos
include('includes/dbconnection.php');
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $services=$_POST['services'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $phone=$_POST['phone'];
    $aptnumber = mt_rand(100000000, 999999999);
  //bfsbhdzshnszedzhb
    $query=mysqli_query($con,"insert into tblappointment(AptNumber,Name,Email,PhoneNumber,AptDate,AptTime,Services) value('$aptnumber','$name','$email','$phone','$adate','$atime','$services')");
    if ($query) {
$ret=mysqli_query($con,"select AptNumber from tblappointment where Email='$email' and  PhoneNumber='$phone'");
$result=mysqli_fetch_array($ret);
$_SESSION['aptno']=$result['AptNumber'];
 echo "<script>window.location.href='thank-you.php'</script>";	
  }
  else
    {
      $msg="Algo salió mal. Inténtalo de nuevo";
    }

  
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Juliza</title>
        
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
  <body>
	  <?php include_once('includes/header.php');?>
    <!-- END nav -->
		 <!--seccion encarda de mostrar informacion al cliente mostrandola de una forma animada 
		utilizando un carrucel-->
    <section  class="hero" style="background-image: url(images/bg1.jpg);" data-stellar-background-ratio="0.5">
	<!--inicio del que contiene el contenido del carrucel-->	  
	<div class="home-slider owl-carousel">
	      <div class="slider-item ">
		  
		  <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
				    <!--colocamos una de las imagenes que parecen en el carrucel-->
				 <img class="one-third align-self-end order-md-last img-fluid"  src="images/bell.png" alt="">
				  <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
					  
				  <div class="text mt-5">
					    <!--colocamos el logo principal que identifica el negocio-->
						  <span  ><img style="width: 35%; height:35%" src="images/logoprincipal.jpg" alt=""></span>
						   <!--colocamos texto motivacional para el cliente-->
			            <h1 style="color: purple;" class="mb-4">Te esperamos</h1>
			            <p class="mb-4"> <h4> Nos enorgullecemos de nuestro trabajo de alta calidad y atención al detalle.
							 Los productos que utilizamos son de marca de primera calidad.</h4></p>
			             
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
          <!--div que contiene la siguiente imagen del carrucel-->
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
				
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
				   <!--colocamos una de las imagenes que parecen en el carrucel-->
			  <img class="one-third align-self-end order-md-last img-fluid" src="images/bella.png" alt="">
				  
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text mt-5">
						  <!--colocamos el logo principal que identifica el negocio-->
						  <span ><img style="width: 35%; height:35%" src="images/logoprincipal.jpg" alt=""></span>
						  <!--colocamos texto motivacional para el cliente-->
			            <h1 style="color: purple;" class="mb-4">Sera un gusto atenderte  </h1>
			            <p class="mb-4"> <h3>Te ofrecemos la mejor atención con equipos de tecnología avanzada  </h3></p>
			            
			           
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div> <!--ciere del div que contiene el carrucel-->
    </section> <!--cierre de seccion numero 1-->


<br>
    <section class="ftco-section ftco-no-pt ftco-booking">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters d-md-flex justify-content-end">
    			<div class="one-forth d-flex align-items-end">
    				<div class="text">
    					<div class="overlay"></div>
    					<div class="appointment-wrap">
    						<span class="subheading">Reservaciones</span>
								<h3 class="mb-2">Haz una cita</h3>
		    				<form action="#" method="post" class="appointment-form">
								<!--Formulario-->
			            <div class="row">
			              <div class="col-sm-12">
			                <div class="form-group">
					              <input type="text" class="form-control" id="name" placeholder="Nombre" name="name" required="true">
					            </div>
			              </div>
			              <div class="col-sm-12">
			                <div class="form-group">
					              <input type="email" class="form-control" id="appointment_email" placeholder="Correo" name="email" required="true">
					            </div>
			              </div>
				            <div class="col-sm-12">
			                <div class="form-group">
					              <div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="services" id="services" required="true" class="form-control">
								  <option value="">Selecciona Nuestros Servicios</option>
								 
								  <!--query que realiza la consulta a la tabla de servicios para mostrar al cliente-->
		                      	<?php $query=mysqli_query($con,"select * from tblservices");
                                  while($row=mysqli_fetch_array($query))
                                {
							   ?>
								<!--le pedimos que cuando el cliente de click en servicio vaya a la tabla de se que le muestre 
								todos los servios disponibles-->
		                       <option value="<?php echo $row['ServiceName'];?>"><?php echo $row['ServiceName'];?></option>
		                       <?php } ?> 
		                      </select>
		                    </div>
					            </div>
						  </div>
						  
			              <div class="col-sm-12">
			                <div class="form-group">
			                  <input type="text" class="form-control appointment_date" placeholder="Fecha" name="adate" id='adate' required="true">
			                </div>    
			              </div>
			              <div class="col-sm-12">
			                <div class="form-group">
			                  <input type="text" class="form-control appointment_time" placeholder="Hora" name="atime" id='atime' required="true">
			                </div>
			              </div>
			              <div class="col-sm-12">
			                <div class="form-group">
			                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono" required="true" maxlength="10" pattern="[0-9]+">
			                </div>
			              </div>
				          </div>
				          <div class="form-group">
			              <input type="submit" name="submit" value="HAZ UNA CITA" class="btn btn-primary">
			            </div>
			          </form>
		          </div>
						</div>
				</div>
				<!--Incluimos una imagene dentro de un div en la parte derecha de la vista principal-->
					<div class="one-third">
						<div class="img" style="background-image: url(images/spa.jpg);" >
						</div>
					</div>
    		</div>
    	</div>
    </section> <!--cierre de la seccion principal-->

		
		<br>

     <!--con este fragmento de codigo incluimos en vista principal la parte inferios donde se muetra datos importantes sobre el negocio-->
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