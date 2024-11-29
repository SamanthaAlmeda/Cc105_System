


<?php 

include('include/dbcon.php');
include('session.php');
?>
	<?php
	if(ISSET($_SESSION['id'])){
			
	$q_adminname = $conn->query("SELECT * FROM `admin` WHERE `id` = '$_SESSION[id]'") or die(mysqli_error());
	$f_adminname = $q_adminname->fetch_array();
	$admin_name = $f_adminname['username'];
	
	
				$id=$_GET['school_number'];		
			$user=$conn->query("insert into backup_student  select * from tbl_student where school_number = '$id' ");
			$user=$conn->query("insert into backup_login_logs  select * from check_in where school_number = '$id' ");
	
			$user = $conn->query("delete from tbl_student where school_number = '$id' ") or die(mysqli_error());
			$user = $conn->query("delete from check_in where school_number = '$id' ") or die(mysqli_error());			
						
			$action= 'Deleted student, ID Number: ';
			
	
			
$conn->query("insert into all_eventaction (admin_fullname,action,date) values('$admin_name','$action' '$id',NOW()) ") or die(mysqli_error());			
			
						
header('location:user.php');
	}
			
?>
