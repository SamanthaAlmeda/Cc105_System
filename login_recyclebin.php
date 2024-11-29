<?php
include('include/dbcon.php');



$username=$_POST['username'];
$password=$_POST['password'];

	
	

	$q_login = $conn->query("SELECT * FROM admin_head WHERE username = '$username' && password = '$password'") or die(mysqli_error());
	$f_login = $q_login->fetch_array();
	$v_login = $q_login->num_rows;
	if($v_login > 0){

	session_start();
	$_SESSION['admin_id'] = $f_login['admin_id'];
		echo "<script>alert('Successfully '); window.location='studentrecord_backup.php'</script>";

	

			

}else{
	echo "<script>alert('Invalid Username and Password! Try again.'); window.location='home.php'</script>";

	
	
}


	
	
	?>
	

