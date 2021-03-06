<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['bpmsaid']=$ret['ID'];
     header('location:panel-control.php');
    }
    else{
    $msg="Información Inválida.";
    }
  }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin </title>

		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- Custom CSS -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<!-- font CSS -->
		<!-- font-awesome icons -->
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- //font-awesome icons -->
		<!-- js-->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<!--webfonts-->
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<!--//webfonts--> 
		<!--animate-->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
			<script>
				new WOW().init();
			</script>
		<!--//end-animate-->
		<!-- Metis Menu -->
		<script src="js/metisMenu.min.js"></script>
		<script src="js/custom.js"></script>
		<link href="css/custom.css" rel="stylesheet">
		<!--//Metis Menu -->
</head> 
<style>
.uno{
	background-color:#c6b1c9; 
	margin-top: 11%;
	width: 60%;
	height: 50%;
}
.logo{
	margin-left:15%;
	width: 20%;
	width: 25%;
}
</style>
<body >
			
		 <center>
			<div class="uno" >
				<h3 style="color: purple;"class="title1">Bienvenido(a) a tu Sistema Administrativo! </h3>
				<img class="logo" src="images/logoprincipal.jpg" alt="awsdsw">
			 <div>
				<form role="form" method="post" action="">
					<p style="font-size:16px; color:blue" align="center"> <?php if($msg){
									echo $msg;
								}  ?> </p>
					<input type="text" class="user" name="username" placeholder="Usuario" required="true">
					<br><br>
					<input type="password" name="password" class="lock" placeholder="Contraseña" required="true">
					<br><br>
					<input class="btn btn-primary" type="submit" name="login" value="Acceder">
					<br>
					<div class="forgot-grid">
					<br>		
						<div class="forgot">
						<a  style="color:black" href="../index.php">Volver al Inicio</a>
						</div>
						<br>
					</div>
						<div class="forgot-grid">
								
						<div class="forgot">
							<a style="color:black"  href="forgot-password.php">¿Olvidaste tu contraseña?</a>
						</div>
					<br>
					    </div>
					</form>
				</div>
			</div>
		</center>
		
</body>	
		
	
	   
	
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>

</html>