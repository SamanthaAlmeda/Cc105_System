<?php session_start();
include 'include/dbcon.php';


if(isset($_POST['login'])){
$post_username = trim($_POST['username']);
$post_password = trim($_POST['password']);



$admin = mysql_query("SELECT * FROM admin WHERE (username = '" .addslashes($post_username) . "') and (password = '" .$post_password. "')");

if($row=mysql_fetch_array($admin)){
	
$_SESSION['username'] = $row['username'];


echo "<script> window.location='admin.php'</script>";
}
else
{
echo "<script> alert('Invalid username and password'); window.location='../admin/mods/index.php'</script>";
}

}
?>