




	 
  
 

<?php
include('include/dbcon.php');

?>
<?php ob_start(); ?>
<?php
$id=$_GET['school_number'];
?>

	 
 
	
	
	


<?php

$sql = $conn->query("SELECT * , round(sum(total_rendered)/10000,0)	 AS sum FROM check_in where school_number = '$id'"); 
	while($rows = $sql->fetch_array())
$sum  = $rows['sum'];	


	


		
		
			


$sql= $conn->query("SELECT tbl_student.school_number, tbl_student.firstname, tbl_student.middlename, tbl_student.lastname,tbl_student.finish_time,tbl_student.remain_time,tbl_student.totaltime_render,check_in.check_in,
		        check_in.date1, check_in.check_out,check_in.total_rendered  FROM tbl_student, check_in WHERE tbl_student.school_number =  '$id'
             AND check_in.school_number = '$id'");

		while($row = $sql->fetch_array())
	
		{
				
				$total=$row["total_rendered"];
				$tt=$row["totaltime_render"];
				
					
$conn->query( "update tbl_student set finish_time  = '$sum',remain_time = '$tt' - '$sum' where school_number = '$id'");
	

  } 
?>





