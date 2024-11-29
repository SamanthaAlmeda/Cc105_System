<?php
include('include/dbcon.php');



?>

<?php
if(ISSET($_SESSION['admin_id'])){
			
	$q_adminname = $conn->query("SELECT * FROM `admin` WHERE `id` = '$_SESSION[id]'") or die(mysql_error());
	$f_adminname = $q_adminname->fetch_array();
	$admin_name = $f_adminname['username'];

	
	

				session_start();		
	session_unset('admin_id');
	session_destroy();
	
}
	header('location: home.php');
	

	?>