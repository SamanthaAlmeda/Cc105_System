<?php 

include('include/dbcon.php');
?>
	<?php
		   
		if (isset($_GET['school_number']))
	$id=$_GET['school_number'];

		$user=$conn->query("insert into tbl_student  select * from backup_student where school_number = '$id' ");
	
		$user = $conn->query("delete from backup_student where school_number = '$id' ") or die(mysqli_error());			
				 
		
			
echo '
			<script type = "text/javascript">
				alert("Successfully Moved ");
				window.location = "studentrecord_backup.php";
			</script>
		';	
?>