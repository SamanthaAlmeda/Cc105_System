


<?php 

include('include/dbcon.php');

?>
	<?php
	
	
		
		$id=$_GET['school_number'];		
	$user = $conn->query("delete from backup_student where school_number = '$id' ") or die(mysqli_error());
					
					
header('location:studentrecord_backup.php');

			
?>
