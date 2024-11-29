<?php

require_once('include/dbcon.php');

	
$username = $_POST['username'];
	
	
;
	$q_checkadmin = $conn->query("SELECT * FROM `admin_logs` WHERE `username` = '$username' and `status` = 1 ") or die(mysqli_error());
		$v_checkadmin = $q_checkadmin->num_rows;
		if($v_checkadmin == 1){

		
	

		$conn->query("update `admin_logs` set `time_logout` = NOW(), `date_logout`= curdate(), `status` = '0' WHERE `id` = '$id' and `status` = 1 ");
		
		}
	?>