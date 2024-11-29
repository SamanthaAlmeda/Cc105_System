<?php 

include('include/dbcon.php');

$user=$_GET['username'];

mysql_query("delete from admin_logs where username = '$user' ")or die(mysql_error());

header('location:admin.php');
?>