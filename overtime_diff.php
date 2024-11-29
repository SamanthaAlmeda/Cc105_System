
	

<?php
include('include/dbcon.php');



if (isset($_POST['submit1'])) {
	$id	=  $_POST['id'];
						$sql=$conn->query("select * from check_in where check_out > = 	9")or die (mysql_error());

		while($row= $sql->fetch_array())
		

						
if ($row >0) 
  {
   session_start();
  
    $_SESSION['school_number'] = $row['school_number'];
 
$check_out = $row['check_out'];

	 
					
							
  
											echo  " <script> alert ('9 minus by 1 '); window.location='../admin/mods/index.php'</script>";
						


	


  }
		

	}
	