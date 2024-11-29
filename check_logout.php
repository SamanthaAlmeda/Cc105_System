
	

<?php
include('include/dbcon.php');



if (isset($_POST['submit1'])) {
	$id	=  $_POST['id'];
							$sql=$conn->query("select * from tbl_student where school_number='$id'")or die (mysql_error());
				$sql=$conn->query("select * from check_in where school_number='$id' and check_in ='00:00:00' ")or die (mysql_error());
		while($row = $sql->fetch_array())
	
						
if ($row >0) 
  {
   session_start();
  
    $_SESSION['school_number'] = $row['school_number'];
   
	


					
											echo  " <script> alert (You did Not Logged in. Pls Login before Logout'); window.location='../admin/mods/index.php'</script>";
							require_once'session_in_out.php';

					
  }
  
if (isset($_POST['submit1'])) {
	$id	=  $_POST['id'];
	
	
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
	
	 

			

	 
	$conn->query( "update check_in set check_out =  curtime(), remarks = '$remarks', Note= '$note', status= '1', total_rendered = check_out - check_in where school_number = '$id' and check_out = '' and total_rendered = ''");
			
				echo  " <script> alert ('Successfully Logged out'); window.location='../admin/mods/index.php' </script>";
				 require_once'session_in_out.php';
				 
					}
				
}

}


?>
