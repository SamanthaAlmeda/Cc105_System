
<?php
include('session.php');
include('include/dbcon.php');
?>

<?php	
							
	if(ISSET($_SESSION['id'])){
			$q_adminname = $conn->query("SELECT * FROM `admin` WHERE `id` = '$_SESSION[id]'") or die(mysql_error());
			$f_adminname = $q_adminname->fetch_array();
			$admin_name = $f_adminname['username'];
	
	require_once ('include/dbcon.php');
    	if (isset($_POST['add'])){
			$school_number = $_POST['school_number'];
			$firstname = $_POST['firstname'];
			$middlename = $_POST['middlename'];
			$lastname = $_POST['lastname'];
			$gender = $_POST['gender'];
			$address = $_POST['address'];
			$course = $_POST['course'];
			$year = $_POST['year'];
			$school = $_POST['school'];
			$totaltime_render = $_POST['totaltime_render'];
			$b='-';
			$status='incomplete';
			$action= 'Added Trainee, Name: ';

	
$sql = $conn->query("SELECT * FROM `tbl_student` WHERE `school_number` = '$school_number' and `school` = '$school' and `firstname` = '$firstname'") or die(mysqli_error());
	$row = $sql->num_rows;
if($row > 0){
	echo '<script type = "text/javascript">alert("ISchool ID already taken"); 
			window.location = "user.php";
		</script>';
	}else{
	$conn->query("INSERT INTO `tbl_student`(`school_number`,`firstname`,`middlename`,`lastname`,`gender`,`address`,`course`,`year`,`school`,`status`,`totaltime_render`,`remain_time`) VALUES('$school' '$b' '$school_number' , '$firstname', '$middlename', '$lastname', '$gender', '$address','$course','$year', '$school','$status','$totaltime_render','$totaltime_render')") or die(mysqli_error());
	$conn->query("insert into all_eventaction (admin_fullname,action,date) values('$admin_name','$action' '$firstname''$lastname',NOW()) ") or die(mysqli_error());			
echo  " <script> alert (' $school$b$school_number is youd ID Number '); window.location='user.php'</script>";
	}
	}
	}	
?>
						
                   
          