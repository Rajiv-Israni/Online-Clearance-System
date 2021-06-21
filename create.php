<?php
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
?>