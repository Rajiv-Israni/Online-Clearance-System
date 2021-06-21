
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
      <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="">Dueono</a></h1>         
               </div>
             <div class=" border-bottom">
            <div class="full-left">
              
            <div class="clearfix"> </div>
           </div>
 <!-- Brand and toggle get grouped for better mobile display -->
         
           <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="drop-men" >
                <ul class=" nav_1">
                                       <a  name="logout" href="ui.php?logout='1'"  ><span style="color:#d95459" class=" name-caret"><b>LOGOUT<i ></i></span></a>
                    
                </ul>
             </div><!-- /.navbar-collapse -->
            <div class="clearfix">
       
     </div>
 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    
                    <li>
                       <a href="#" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Reports<span class="fa arrow"></span></a>
                       <ul class="nav nav-second-level">
                            <li><a href="student_fees_view.php" class=" hvr-bounce-to-right"> <i class="fa fa-desktop nav_icon"></i>View Fees</a></li>
                            
                            <li><a href="add_fees_student.php" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i>Add Record</a></li>

                        </ul>
                    </li>
                    
                </ul>
            </div>
			</div>
        </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

	
 	<!--//grid-->
      <script>

	function edit(id)
{
	$.get("edit_fees.php",
    {
	id:id
    },
    function(data, status)
	{
      var adata=JSON.parse(data);
      //alert(obj);
	   $("#tf").val(adata[0]);
	   $("#fp").val(adata[1]);
	   $("#fr").val(adata[2]);
	   $("#id").val(adata[3]);
	   $("#aid").val(adata[4]);
		  

		});
			$('#updatemodal').modal({
					show: 'true'
			});
}
	</script>

 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="student_list_library.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>View</span>
				</h2>
		    </div>
		<!--//banner-->
	
 	<!--//grid-->
 	
 	<div class="banner" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							<div class="panel-body no-padding">
								<table class="table table-striped">
									<thead>
										<tr class="warning">
											<th>ID</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Branch</th>
											<th>Semester</th>
											<th>Total Fees</th>
											<th>Fees Paid</th>
											<th>Fees Remaining</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody id="tablebody">
									</tbody>
								</table>
							</div>
						</div>


						<div class="modal fade" id="updatemodal" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Edit Student Fees Details</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" action="update_student_fees.php" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Total Fees</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="tf" name="tf">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Fees Paid</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="fp" name="fp">
									</div>
									</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Fees Remaining</label>
									<div class="col-sm-8">
										<input type="disabled" class="form-control1" id="fr" name="fr" readonly>
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
	<script>
$(document).ready(function(){
   
        $.post("getable_student_fees.php",
        {
       
        },
        function(data){
            $("#tablebody").html(data);
        });
});
</script>
</body>
</html>

