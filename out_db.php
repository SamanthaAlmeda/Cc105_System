<?php
include('include/dbcon.php');



if (isset($_POST['submit1'])) {
	$id	=  $_POST['id'];
	
		


		$sql = $conn->query("SELECT check_out -check_in AS total FROM check_in where school_number = '$id'"); 
		$sql=$conn->query("select * from tbl_student where school_number='$id'")or die (mysql_error());
		$sql=$conn->query("select * from check_in where school_number='$id'")or die (mysql_error());
		
	while($row = $sql->fetch_array())


if ($row > 0) 
  {
   session_start();
 $_SESSION['id'] = $row['school_number'];

		$remarks = $_POST['remarks'];
			$note = $_POST['Note'];
		$ss='Successfully Logged in';
			$check_in=$row["check_in"];
			$check_out=$row["check_out"];
				$total=$row["total_rendered"];
				
						
		
		
	
 
	 
	$conn->query( "update check_in set check_out= NOW(), remarks = '$remarks', Note= '$note', status= '1' ,total_rendered = TIMEDIFF(check_out,check_in) where school_number = '$id' and check_out = '' and total_rendered = '' and status = '0'");
		 
	
		
				echo  " <script> alert (' $id Successfully Logged out'); window.location='main.php' </script>";
				 require_once'session_in_out.php';

					}
				
					{
			echo  " <script> alert ('$id Doesnt exist'); window.location='main.php' </script>";
			
					}
				
			}
			

		

	
?>

