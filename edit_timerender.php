

	

								
	<?php
	include('include/dbcon.php');
if (isset($_GET['school_number']))

$conn->query("SELECT * FROM `tbl_student` where `school_number` = '$id'") or die(mysqli_error());
					
			

	
	
	$finish = $_POST['finish_time'];
	$remain = $_POST['remain_time'];
	$totaltime = $_POST['totaltime_render'];
	
	


	{		
	$conn->query(" UPDATE tbl_student SET  totaltime_render='$totaltime',finish_time='$finish_time',remain_time='$remain_time' WHERE `school_number` = '$id'");

		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "view_user.php";
			</script>
		';	
	}
	
	