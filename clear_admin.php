<?php 

include('include/dbcon.php');



$conn->query("delete from all_eventlogs ")or die(mysql_error());
echo" <script> alert ('All Admin Logs Successfully Deleted');window.location='admin_event.php'</script>";

?>