<?php
include('include/dbcon.php');



$username=$_POST['username'];
$password=$_POST['password'];

	
	
	
	$q_login = $conn->query("SELECT * FROM admin WHERE username = '$username' and password = '$password'") or die(msqli_error());
	$f_login = $q_login->fetch_array();
	$v_login = $q_login->num_rows;
	if($v_login > 0){

	session_start();
		$_SESSION['id'] = $f_login['id'];
echo "<script>alert('Successfully Login!'); window.location='home.php'</script>";


		$action= 'Logged in';
			
	
			
$conn->query("insert into all_eventaction (admin_fullname,action,date) values('$username','$action' '$id',NOW()) ") or die(mysqli_error());			
	
}else{
	echo "<script>alert('Invalid Username and Password! Try again.'); window.location='main.php'</script>";

	
	
}


	
	
	?>
	

