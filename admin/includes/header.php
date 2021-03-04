<div  class="sticky-header header-section ">
      <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <!--logo -->
        <div  class="logo">
          <a style="background-color:#361a3d;" href="index.php">
            <h1 >Salon de belleza, Peluqueria y SPA</h1>
            <br>
          </a>
        </div>
        <!--//logo-->
       </div>
      <div style="background-color:#361a3d;"class="header-right">
        <div class="profile_details_left"><!--notifications of menu start -->
          <ul class="nofitications-dropdown">
            <?php
                  $ret1=mysqli_query($con,"select ID,Name from  tblappointment where Status=''");
                  $num=mysqli_num_rows($ret1);

                  ?>  
            <li class="dropdown head-dpdn">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue"><?php echo $num;?></span></a>
              
              <ul class="dropdown-menu">
                <li>
                  <div class="notification_header">
                    <h3>Tienes <?php echo $num;?> Notificación</h3>
                  </div>
                </li>
                <li>
            
                   <div class="notification_desc">
                     <?php if($num>0){
                      while($result=mysqli_fetch_array($ret1))
                      {
                    ?>
                 <a class="dropdown-item" href="nueva-cita.php?viewid=<?php echo $result['ID'];?>">Nueva cita recibida de <?php echo $result['Name'];?> </a><br />
                    <?php }} else {?>
                        <a class="dropdown-item" href="total-citas.php">No se recibió nueva cita</a>
                            <?php } ?>
                           
                  </div>
                  <div class="clearfix"></div>  
                 </a></li>
                 
                
                 <li>
                  <div class="notification_bottom">
                    <a href="nueva-cita.php">Ver todas las notificaciones</a>
                  </div> 
                </li>
              </ul>
            </li> 
          
          </ul>
          <div class="clearfix"> </div>
        </div>
        <!--notification menu end -->
        <div class="profile_details">  
        <?php
          $adid=$_SESSION['bpmsaid'];
          $ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adid'");
          $row=mysqli_fetch_array($ret);
          $name=$row['AdminName'];

          ?> 
          <ul>
            <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img"> 
                  <span class="prfil-img"><img src="images/logoprincipal.jpg" alt="" width="50" height="60"> </span> 
                  <div class="user-name">
                    <p><?php echo $name; ?></p>
                    <span>Administrador</span>
                  </div>
                  <i class="fa fa-angle-down lnr"></i>
                  <i class="fa fa-angle-up lnr"></i>
                  <div class="clearfix"></div>  
                </div>  
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li> <a href="cambio-contraseña.php"><i class="fa fa-cog"></i> Configuración</a> </li> 
                <li> <a href="perfil-administrador.php"><i class="fa fa-user"></i> Perfil</a> </li> 
                <li> <a href="index.php"><i class="fa fa-sign-out"></i> Cerrar Sesión</a> </li>
              </ul>
            </li>
          </ul>
        </div>  
        <div class="clearfix"> </div> 
      </div>
      <div class="clearfix"> </div> 
    </div>