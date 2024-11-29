


<?php 

include('include/dbcon.php');

?>
	<?php
	
	
		
		
	$user = $conn->query("delete from backup_student");
					
					
header('location:studentrecord_backup.php');

			
?>
