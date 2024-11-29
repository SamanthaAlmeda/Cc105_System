



<?php 

include('include/dbcon.php');

?>
	<?php
	
	
		
		$id=$_GET['school_number'];		
	$user = $conn->query("delete from backup_login_logs where school_number = '$id' ") or die(mysqli_error());
					
					
header('location:trainee_logrecycle.php');

			
?>
