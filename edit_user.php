

	<?php include ('header.php'); 
	
	include ('session.php');
	?>



								
	<?php
	
	if(ISSET($_SESSION['id'])){
			
	$q_adminname = $conn->query("SELECT * FROM `admin` WHERE `id` = '$_SESSION[id]'") or die(mysqli_error());
	$f_adminname = $q_adminname->fetch_array();
	$admin_name = $f_adminname['username'];
	
	
if (isset($_GET['school_number']))

$conn->query("SELECT * FROM `tbl_student` where `school_number` = '$id'") or die(mysqli_error());
					
			

	$id = $_POST['school_number'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$course = $_POST['course'];
	$gender = $_POST['gender'];
	$year = $_POST['year'];
	$address = $_POST['address'];
	$school = $_POST['school'];
	$totaltime = $_POST['totaltime_render'];
	
				
			$action= 'Edited Trainee, ID Number: ';
			


	{		
	$conn->query(" UPDATE tbl_student SET  school_number='$id',firstname='$firstname', middlename='$middlename', lastname='$lastname',  
	gender='$gender', address='$address', course='$course',year='$year', school='$school',totaltime_render = '$totaltime' WHERE `school_number` = '$id'");
			
$conn->query("insert into all_eventaction (admin_fullname,action,date) values('$admin_name','$action' '$id',NOW()) ") or die(mysqli_error());			
			
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "user.php";
			</script>
		';	
	}
	}
	