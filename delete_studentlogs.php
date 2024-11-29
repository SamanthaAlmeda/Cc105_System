<?php 

include('include/dbcon.php');
?>
	<?php
		   
		if (isset($_GET['school_number']))
	$id=$_GET['school_number'];

		$user=$conn->query("insert into backup_login_logs  select * from check_in where school_number = '$id' ");
	
		$user = $conn->query("delete from check_in where school_number = '$id' ") or die(mysqli_error());			
				 $conn->query("update tbl_student set finish_time = 0, remain_time = 0 where  school_number = '$id' ") or die(mysqli_error());			
						
			
		
			
echo '
			<script type = "text/javascript">
				alert("Successfully deleted  logs");
				window.location = "user.php";
			</script>
		';	
?>