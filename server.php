<?php 
    session_start();
	$firstname="";
	$lastname="";
	$sem="";
	$branch="";
	$enroll="";
	$email="";
	$password="";
	$username="";
	$useradmin="";
	$passadmin="";
	$id="";

	//STUDENT REGISTRATION//
	
	$usernameErr;
	 $passErr;
$db = mysqli_connect('localhost','root','','college');

if(isset($_POST['REGISTER'])){
	print_r($_POST);
	$firstname = mysqli_real_escape_string($db,$_POST['firstname']);
	$lastname= mysqli_real_escape_string($db,$_POST['lastname']);
	$sem= mysqli_real_escape_string($db,$_POST['sem']);
	$branch = mysqli_real_escape_string($db,$_POST['branch']);
	$enroll = mysqli_real_escape_string($db,$_POST['enroll']);
	$email= mysqli_real_escape_string($db,$_POST['email']);
	$password= mysqli_real_escape_string($db,$_POST['password']);

 
	$sql = "INSERT INTO stud_reg (fname, lname, sem, branch, enroll, email, password) 
			VALUES ('$firstname','$lastname','$sem','$branch','$enroll','$email','$password')";
			
			mysqli_query($db,$sql);
}
// END STUDENT REGISTRATION//


// STAFF REGISTRATION//




if(isset($_POST['staffregadmin'])){
	print_r($_POST);
	$firstname = mysqli_real_escape_string($db,$_POST['firstname']);
	$lastname= mysqli_real_escape_string($db,$_POST['lastname']);
	$role= mysqli_real_escape_string($db,$_POST['role']);
	$dept = mysqli_real_escape_string($db,$_POST['dept']);
	$email= mysqli_real_escape_string($db,$_POST['email']);
	$password= mysqli_real_escape_string($db,$_POST['password']);

 
	$sql = "INSERT INTO staff_details (fname, lname, role, department,email, password) 
			VALUES ('$firstname','$lastname','$role','$dept','$email','$password')";
			mysqli_query($db,$sql);
}

// END STAFF REGISTRATION //

   
    //login STUDENT//
   if (isset($_POST['login'])) {
	     
	   if (empty($_POST["userid"])) {
    $usernameErr = "userid is required";
  } else {
    $username = ($_POST["userid"]);
  }

  if (empty($_POST["password"])) {
    $passErr = "password is required";
  } else {
    $password = ($_POST["password"]);
  }

	  $username = mysqli_real_escape_string($db, $_POST['userid']);
	  $password = mysqli_real_escape_string($db, $_POST['password']);
	
		$query = "SELECT * FROM stud_reg WHERE email='$username' AND password='$password'";
	
  	$results = mysqli_query($db, $query);

  	if (mysqli_num_rows($results) == 1) {
		
		$row= mysqli_fetch_assoc($results);
		$_SESSION['uid']=$row['id'];
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ui.php');
	  
  	}
	
	else {
  		echo "wrong username and password ";
  	}
	
	
	
	
	
  }
  // END STUDENT LOGIN//
  
   // ADMIN LOGIN ///
  
   if (isset($_POST['loginadmin']))
   {	   {
	  
	  
    $useradmin = ($_POST["adminid"]);
  

  
    $passadmin = ($_POST["adminpass"]);
  }

	  $username = mysqli_real_escape_string($db, $useradmin);
	  $password = mysqli_real_escape_string($db, $passadmin);
		
		$query = "SELECT * FROM admin WHERE username='$useradmin' AND password='$passadmin'";
		
  	$results = mysqli_query($db, $query);

  	if (mysqli_num_rows($results) == 1) {

  	  $_SESSION['username'] = $useradmin;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: admin.php');
  	}else {
  		echo "wrong username and password ";
  	}
   }
  
   // END ADMIN LOGIN ///
   
   
   		$query ="SELECT * FROM attendance WHERE id='$_SESSION[uid]'";
   		$showdata1= mysqli_query($db,$query);
   		$query ="SELECT * FROM exam WHERE id='$_SESSION[uid]'";
   		$showdata2= mysqli_query($db,$query);
		$query ="SELECT * FROM cau_mon WHERE id='$_SESSION[uid]'";
   		$showdata3= mysqli_query($db,$query);
		$query ="SELECT * FROM lib_fine WHERE id='$_SESSION[uid]'";
   		$showdata4= mysqli_query($db,$query);
   		$query ="SELECT id FROM stud_info WHERE id='$_SESSION[uid]'";
   		$showdata5= mysqli_query($db,$query);
	
	// STAFF LOGIN //
	
	 if (isset($_POST['loginstaff'])) {
		 
    $username= ($_POST["staffid"]);

    $password = ($_POST["staffpass"]);

    $role = ($_POST["role"]);
  }

	  $username = mysqli_real_escape_string($db, $username);
	  $password = mysqli_real_escape_string($db, $password);
		
		$query = "SELECT * FROM staff_details WHERE email='$username' AND password='$password'";
		
  	$results = mysqli_query($db, $query);
	
  	if (mysqli_num_rows($results) == 1) {
		$row= mysqli_fetch_assoc($results);
		$_SESSION['uid']=$row['id'];
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
 

	 if (($_POST['role'])=="teacher")
		 {
			   header('location: student_list.php');
    
	}
	
	
	 if (($_POST['role'])=="librarian"){
		 
			   header('location: student_list_library.php');
    
	}
	
	 if (($_POST['role'])=="accountant") {
		 
			   header('location: student_fees_view.php');
    
	}
	
	 // LOG OUT STUDENT //
	  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: studlogin.php");
  }

	 
	 
	 // END LOG OUT STUDENT//
	 
	 
}
  	
	 
	 ?>

