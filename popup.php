
	

<?php
include('include/dbcon.php');



if (isset($_POST['submit1'])) {
	$id	=  $_POST['id'];
						$sql=$conn->query("select * from tbl_student where school_number='$id'")or die (mysql_error());
				$sql=$conn->query("select * from check_in where school_number='$id' and status ='0' ")or die (mysql_error());
		while($row= $sql->fetch_array())
		

						
if ($row >0) 
  {
   session_start();
  
    $_SESSION['school_number'] = $row['school_number'];
 


	 
					
											echo  " <script> alert (' $id - This ID number already Logged In '); window.location='main.php'</script>";
							require_once'session_in_out.php';

					
  }
  

		$sql=$conn->query("select * from tbl_student where school_number='$id'")or die (mysql_error());
		while($row = $sql->fetch_array())

						
if ($row >0) 
  {
   session_start();
  
    $_SESSION['school_number'] = $row['school_number'];
   
		$remarks = $_POST['remarks'];

		$id= strtoupper($row['school_number']);
		 $fname = strtoupper($row['firstname']);
	 $mname = strtoupper($row['middlename']);
	 $lname = strtoupper($row['lastname']);
		$ss='Successfully Logged in';

	 
	$conn->query( "INSERT INTO check_in (school_number,remarks,date1,check_in) values ('$id','$remarks',curdate(),NOW())") or die(mysql_error());
	
				
					
											echo  " <script> alert ('$fname $mname $lname $ss '); window.location='main.php'</script>";
							require_once'session_in_out.php';

					
  }
  

		

	}
	
	