
<?php
include('include/dbcon.php');


   $user=  $_POST['username'];
		

		

	 
	$conn->query( "INSERT INTO admin_logs (username,date_login,time_login,status) values ('$user',curdate(),curtime(),'1')");
	
				

  



		

	



?>