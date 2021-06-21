
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include('server.php') ?>

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
<script>

	function edit(id)
{
	$.get("edit.php",
    {
	id:id
    },
    function(data, status)
	{
      var adata=JSON.parse(data);
      //alert(obj);
	   $("#month").val(adata[0]);
	   $("#attendance").val(adata[1]);
	   $("#aid").val(adata[2]);
	   $("#id").val(adata[3]);
		  

		});
			$('#updatemodal').modal({
					show: 'true'
			});
}
	</script>
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
        <span>Attendance</span>
        </h2>
        </div>
    <!--//banner-->

 	<input type="hidden" id="s_id" value="<?php echo $_GET['id'];?>">
 	<div class="banner" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							<div class="panel-body no-padding">
								<table class="table table-striped">
									<thead>
										<tr class="warning">
											<th>ID</th>
											<th>Month</th>
											<th>Attendance</th>
										</tr>
									</thead>
									<tbody id="tablebody">
									<?php while($row = mysqli_fetch_array($showdata1)) {?>
  										<tr>
  		 									<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['month']; ?></td>
	    									<td><?php echo $row['attendance']; ?></td>
  										</tr>
 									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>

	<div class="modal fade" id="updatemodal" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Edit Student Details</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" action="update_student_attendance.php" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Month</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="month" name="month">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Attendance</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="attendance" name="attendance">
									</div>
								</div>
								<input type="hidden" id='aid' name="aid">
								<input type="hidden" id='id' name="id">
								<div class="panel-footer">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
									<button class="btn-success btn">Submit</button>
								</div>
							</div>
						 </div>
							</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					</div>
				</div>
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
	<!-- <script>
$(document).ready(function(){
	var sid=$("#s_id").val();
   
        $.post("getable_student_attendance.php",
        {
      	 id:sid
        },
        function(data){
            $("#tablebody").html(data);
        });
});
</script> -->
</body>
</html>

