<?php 

include('include/dbcon.php');

$id=$_GET['id'];

$conn->query("delete from all_eventaction where id = '$id' ")or die(mysql_error());

header('location:manage_logs.php');
?>