
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include('fine.php') ?>

<?php include('check_session.php') ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
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
<script src="js/Chart.js"></script>

</head>
<body>
<div id="wrapper">
      <?php include('student_navbar.php')?>

 	<!--banner--> 
       <div class="banner">
          <h2>
        <a href="ui.php">Home</a>
        <i class="fa fa-angle-right"></i>
        <span>Fine Breakdown</span>
        </h2>
        </div>
    <!--//banner-->
	
 	<!--//grid-->


 	
 	 <div class="grid-form1">
  	       <h3>Fine Breakdown</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Attendance Fine</label>
									<div class="col-sm-8">
										<input disabled="" type="text" class="form-control1" id="attf" placeholder="<?php echo $arr[1]; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Exam Fine</label>
									<div class="col-sm-8">
										<input disabled="" type="text" class="form-control1" id="ef" placeholder="<?php echo $arr[0]; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Library Fine</label>
									<div class="col-sm-8">
										<input disabled="" type="text" class="form-control1" id="lf" placeholder="<?php echo $arr[2]; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Miscellaneous Fine</label>
									<div class="col-sm-8">
										<input disabled="" type="text" class="form-control1" id="mf" placeholder="<?php echo $arr[3]; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Fees Remaining</label>
									<div class="col-sm-8">
										<input disabled="" type="text" class="form-control1" id="fr" placeholder="<?php echo $arr[4]; ?>">
									</div>
								</div>
								<button type="submit" class="btn-primary btn">Clear Fines</button>
							</form>
						</div>

					</div>
  				
<!---->

<script src="js/bootstrap.min.js"> </script>
  
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

