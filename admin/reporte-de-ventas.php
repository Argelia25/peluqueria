<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE HTML>
<html>
<head>
    <title> Informes de ventas</title>

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
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--navegación-izquierda-fija-->
		 <?php include_once('includes/sidebar.php');?>
		
	<!-- Encabezados del header -->
		 <?php include_once('includes/header.php');?>

	<!--inicio del contenido principal-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 style="color: purple;" class="title1">Informes de ventas</h3>
					
					
				
					<div class="table-responsive ">
												
						<?php
						$fdate=$_POST['fromdate'];
						$tdate=$_POST['todate'];
						$rtype=$_POST['requesttype'];
						?>
						<?php if($rtype=='mtwise'){
						$month1=strtotime($fdate);
						$month2=strtotime($tdate);
						$m1=date("F",$month1);
						$m2=date("F",$month2);
						$y1=date("Y",$month1);
						$y2=date("Y",$month2);
							?>
						<h4 style="color: purple;"class="header-title m-t-0 m-b-30">Informe de ventas del mes</h4>
						<h4 align="center" style="color:blue">Informe de ventas de <?php echo $m1."-".$y1;?> a <?php echo $m2."-".$y2;?></h4>
						<hr />

						<table class="table table-bordered"> 
							<thead>
								<tr>
									<th>S.NO</th>
									<th>Mes / año </th>
									<th>Ventas</th>
								</tr>
							</thead>
									<?php
									$ret=mysqli_query($con,"select month(PostingDate) as lmonth,year(PostingDate) as lyear,sum(Cost) as totalprice from  tblinvoice 
									join tblservices on tblservices.ID= tblinvoice.ServiceId where date(tblinvoice.PostingDate) between '$fdate' and '$tdate' group by lmonth,lyear");
									$cnt=1;
									while ($row=mysqli_fetch_array($ret)) {

									?>
											
								<tr>
                     				<td><?php echo $cnt;?></td>
                  					<td><?php  echo $row['lmonth']."/".$row['lyear'];?></td>
             					    <td><?php  echo $total=$row['totalprice'];?></td>
             
                                </tr>
									<?php
									$ftotal+=$total;
									$cnt++;
									}?>
								<tr>
                 					<td colspan="2" align="center">Total </td>
           						    <td><?php  echo $ftotal;?></td>
   
                 
                 
								</tr>
						</table> 

							<?php } else {
							$year1=strtotime($fdate);
							$year2=strtotime($tdate);
							$y1=date("Y",$year1);
							$y2=date("Y",$year2);
							?>
							<h4 class="header-title m-t-0 m-b-30">Informe de ventas del año</h4>
								<h4 align="center" style="color:blue">Informe de ventas de<?php echo $y1;?> a <?php echo $y2;?></h4>
								<hr />
						<table class="table table-bordered">  
							<thead>
								<tr>
								<th>S.NO</th>
								<th>Año </th>
								<th>Ventas</th>
								</tr>
							</thead>
								<?php
								$ret=mysqli_query($con,"select year(PostingDate) as lyear,sum(Cost) as totalprice from  tblinvoice 
								join tblservices on tblservices.ID= tblinvoice.ServiceId 
								where date(tblinvoice.PostingDate) between '$fdate' and '$tdate' group by lyear");

								$cnt=1;
								while ($row=mysqli_fetch_array($ret)) {

								?>
              
								<tr>
									<td><?php echo $cnt;?></td>
									<td><?php  echo $row['lyear'];?></td>
									<td><?php  echo $total=$row['totalprice'];?></td>
							
									</tr>
										<?php
										$ftotal+=$total;
										$cnt++;
										}?>
								<tr>
									<td colspan="2" align="center">Total </td>
									<td><?php  echo $ftotal;?></td>
						
										
                 
               					</tr>
						</table>
                <?php } ?>	
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		 <?php include_once('includes/footer.php');?>
        <!--//footer-->
	</div>
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
</body>
</html>
<?php }  ?>