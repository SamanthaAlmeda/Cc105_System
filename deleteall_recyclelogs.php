


<?php 

include('include/dbcon.php');

?>
	<?php
	
	
		
		
	$user = $conn->query("delete from backup_login_logs");
					
					
header('location:trainee_logrecycle.php');

			
?>
