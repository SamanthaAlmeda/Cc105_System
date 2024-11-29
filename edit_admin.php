<?php
	require_once 'session.php';
		require_once 'log_out.php';
?>

<!DOCTYPE html>

<html lang = "eng">


  <title>OJT - DTR</title>
  <link href="index.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.png" type="image" />
	<head>

		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					
					<p class = "navbar-text pull-right">OJT Tracking System</p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
								<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = ""></i><img src="upload/<?php echo $f_adminname['admin_image']; ?>" width="25px" height="25px"  $nbsp/> <?php echo htmlentities($admin_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off" color="black"></i> Logout</a></li>
						</ul>
					</li>
				</ul>	
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class = ""><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href = "admin.php"><span class = "glyphicon glyphicon-user"></span>Account</a></li>
		
		<li><a href = "admin.php"><span class = "glyphicon glyphicon-user"></span>OJT / Trainee</a></li>
			<li><a href = "admin_event.php"><span class = "glyphicon glyphicon-user"></span>Admin logs</a></li>
            <li><a href="allojt_logs.php" ><span class = "glyphicon glyphicon-user"></span>All OJT Logs</a></li>				
				</ul>
			<br />


<?php include ('include/dbcon.php');
//$id=$_GET['id'];
 ?>
<?php include ('header.php'); ?>

       
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12	 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-pencil"></i> Edit Admin</h2>
                        <ul class="nav navbar-right panel_toolbox">
                       
                     
<?php
		   
		if (isset($_GET['id']))
		$id=$_GET['id'];
		$sql = $conn->query("SELECT * FROM `admin` where `id` = '$id'") or die(mysqli_error());
						while($row = $sql->fetch_array()){
  ?>

                            <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Admin Image
                                    </label>
                                    <div class="col-md-4">
										<a href=""><?php if($row['admin_image'] != ""): ?>
										<img src="upload/<?php echo $row['admin_image']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
										<?php else: ?>
										<img src="images/admins.jpg" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
										<?php endif; ?>
								
										</a>
                                        <input  type="file"  accept="image/*" style="height:44px; margin-top:10px;" name="image" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">First Name
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" value="<?php echo $row['firstname']; ?>" name="firstname" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Middle Name
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" name="middlename" value="<?php echo $row['middlename']; ?>" placeholder="MI / Middle Name....." id="first-name2" class="form-control col-md-7 col-xs-12">
                                    </div><span style="color:red;">Optional</span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Last Name
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" value="<?php echo $row['lastname']; ?>" name="lastname" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">User Name
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" value="<?php echo $row['username']; ?>" name="username" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Password
                                    </label>
                                    <div class="col-md-4">
                                        <input type="password" value="<?php echo $row['password']; ?>" name="password" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Confirm Password
                                    </label>
                                    <div class="col-md-4">
                                        <input type="password" value="<?php echo $row['confirm_password']; ?>" name="confirm_password" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                    
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <a href="admin.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                        <button type="submit" name="update" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Update</button>
                                    </div>
                                </div>
                            </form>
							
<?php
$id =$_GET['id'];
if (isset($_POST['update'])) {
								$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];
							


							if ($error > 0){
										
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
// $admin_type = $_POST['admin_type'];
$still_profile = $row['admin_image'];
$action= 'Edited his/her own info ';

$sql=$conn->query("select * from admin") or die (mySQL_error());
while($row = $sql->fetch_array())

if($password != $confirm_password)
{
echo "<script>alert('Password do not match!')</script>";
}else
{
$conn->query(" UPDATE admin SET firstname='$firstname', middlename='$middlename', lastname='$lastname', username='$username', password='$password', 
confirm_password='$confirm_password', admin_image='$still_profile' WHERE id = '$id' ")or die(mysql_error());

echo "<script>alert('Successfully Update Admin Info!'); window.location='admin.php'</script>";	
}
$conn->query("insert into all_eventaction (admin_fullname,action,date) values('$firstname' '&nbsp' '$middlename' '&nbsp'  '$lastname','$action',NOW())  ") or die(mysqli_error());			

									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										

move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
$profile=$_FILES["image"]["name"];

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$action= 'Changed profile picture ';
$conn->query("insert into all_eventaction (admin_fullname,action,date) values('$firstname' '&nbsp' '$middlename' '&nbsp'  '$lastname','$action',NOW())  ") or die(mysqli_error());			

$sql=$conn->query("select * from admin") or die (mySQL_error());
while($row = $sql->fetch_array())

if($password != $confirm_password)
{
echo "<script>alert('Password do not match!'); window.location='admin_profile.php'</script>";
}else

{	
	
$conn->query(" UPDATE admin SET firstname='$firstname', middlename='$middlename', lastname='$lastname', username='$username', password='$password', 
confirm_password='$confirm_password', admin_image='$profile' WHERE id = '$id' ")or die(mysql_error());

echo "<script>alert('Successfully Updated Admin Info!'); window.location='admin.php'</script>";


}

	
}
	}
	
	
						}
?>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

        <style>
.x_panel {
    width: 100%; 
    max-width: 800px; 
    background-color: white; /* Ensure this line has a semicolon */
    padding: 16px;
    
}

</style>

