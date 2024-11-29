<?php 

include('include/dbcon.php');

$id=$_GET['id'];

$conn->query("delete from admin where id = '$id' ")or die(mysql_error());

header('location:admin.php');
?>