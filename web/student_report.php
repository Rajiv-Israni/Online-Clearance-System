
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include('server.php'); ?>
<?php include('check_session.php') ?>
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
</head>
<body>
<div id="wrapper">
      <?php include('brand_and_navbar.php')?>

      <!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="student_list.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Reports</span>
				</h2>
		    </div>
		<!--//banner-->
 	
 	<script>
	function gotostudentdetailspage(id)
	{
		window.location='student_details.php?id='+id;
	}
</script>

 	<div class="banner" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							<div class="panel-body no-padding">
								<table class="table table-striped">
									<thead>
										<tr class="warning">
											<th>ID</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Semester</th>
											<th>Enroll</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody id="tablebody">
									</tbody>
								</table>
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
	<script>
$(document).ready(function(){
   
        $.post("getable_student_report.php",
        {
       
        },
        function(data){
            $("#tablebody").html(data);
        });
});
</script>
</body>
</html>

