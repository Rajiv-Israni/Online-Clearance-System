<?php include('server.php') ?>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<title>registration</title>
</head>
<body>
<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1> REGISTRATION </h1>
                    <form action="server.php" method="post">
                        <div class="form-group">
						<label for="FIRST NAME"><b>FIRST NAME</b></label>
                           <input type="text" name="firstname" id="fname" class="form-control" value="" >
						   <label for="LAST NAME"><b>LAST NAME</b></label>
                           <input type="text" name="lastname" id="lname" class="form-control"  value="" >
                           <label for="FIRST NAME"><b>USER NAME/EMAIL</b></label>
                           <input type="text" name="username" id="uname" class="form-control" value="" >
						   
						   
						   <label for="password"><b>PASSWORD</b></label>
                            <input type="password" name="password" id="key" class="form-control" >
                            <label for="role"><b>ROLE</b></label>
                            <input list="rol" name="rol"  id="" class="form-control"   value="">
										<datalist id="rol">
									 <option value="TEACHER">
										<option value="LIBRARY">
										<option value="CASHIER">
										<option value="FEES HANDLER">
									  </datalist>
									  <label for="YEAR"><b>DEPARTMENT</b></label>
         
						   <input list="dep" name="dep"  id="" class="form-control"   value="">
										<datalist id="dep">
										<option value="CSE ">
										<option value="ETC">
										<option value="ELECTRICAL">
										<option value="MECHANICAL">
										<option value="ARCHITECTURE">
										<option value="MBA">
									  </datalist>
									  
                        </div>
                       
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" name="REGISTER">
                    </form>
					</body>
					</html>
                   