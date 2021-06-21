
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Resposive Website Template | Graphs :: w3layouts</title>
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
<script>

	function view(id)
{
	$.get("fine.php",
    {
	id:id
    },
    function(data, status)
	{
      var adata=JSON.parse(data);
      //alert(obj);
	   $("#attf").val(adata[0]);
	   $("#ef").val(adata[1]);
	   $("#lf").val(adata[2]);
	   $("#mf").val(adata[3]);
	   $("#fr").val(adata[4]);
		  

		});
			
}
	</script>
</head>
<body>
<div id="wrapper">
      <?php include('brand_and_navbar.php')?>

 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="student_list_library.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Dashboard</span>
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
										<input disabled="" type="text" class="form-control1" id="attf" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Exam Fine</label>
									<div class="col-sm-8">
										<input disabled="" type="text" class="form-control1" id="ef" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Library Fine</label>
									<div class="col-sm-8">
										<input disabled="" type="text" class="form-control1" id="lf" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Miscellaneous Fine</label>
									<div class="col-sm-8">
										<input disabled="" type="text" class="form-control1" id="mf" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Fees Remaining</label>
									<div class="col-sm-8">
										<input disabled="" type="text" class="form-control1" id="fr" placeholder="">
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

