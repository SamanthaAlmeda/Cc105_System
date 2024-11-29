

	<?php
	
	include('include/dbcon.php');
	
	
	?>

								
	<?php
	
if (isset($_GET['school_number']))

$conn->query("SELECT * FROM `tbl_student` where `school_number` = '$id'") or die(mysqli_error());
					
			



	
	$conn->query(" UPDATE `tbl_student` SET  status = 'Completed' where  `totaltime_render`  = `finish_time`  or `totaltime_render`  < `finish_time`");
	
	?>