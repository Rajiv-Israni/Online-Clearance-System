<?php include('server.php') ?>

<?php 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: studlogin.php");
  }
  ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		</head>
<body>
<div id="wrapper">

<!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.php">NODUE</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	 
			
            <div class="clearfix">
			 	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
	 
      	<h4 style="color:#d95459">
          <?php 
          	echo $_SESSION['success'];
          ?>
      	</h4>
		

      </div>
  	<?php endif ?>
			   
			   </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    
			<div class="clearfix">
       
     </div>
	  <div class="drop-men" >
		        <ul
					<li class="dropdown">
		              <a  name="logout" href="ui.php?logout='1'"  ><span style="color:#d95459" class=" name-caret"><b>LOGOUT<i ></i></span></a>
		             
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                   
               <ul class="nav nav-second-level">
                            <li><a href="attendance.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon" selected></i>ATTENDANCE</a></li>
                            <li><a  href="library.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>LIBRARY</a></li>
							<li><a  href="caution.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>CAUTION</a></li>
							<li><a  href="sessional.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>SESSIONAL</a></li>
                        </ul>
                    
                </ul>
            </div>
			</div>
        </nav>
        
		</div>
		</div>
		
       
</body>
</html>

