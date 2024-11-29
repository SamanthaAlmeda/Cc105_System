<?php


$sql = $conn->query("SELECT  school_number, time(time(check_out) - time(check_in))) as total FROM check_in where school_number = '$id' order by date1 ASC"); 
	while($rows = $sql->fetch_array())
$sum  = $rows['total'];	

