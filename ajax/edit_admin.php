<?php include ('include/dbcon.php');
$user=$_GET['username'];
 ?>
<?php include ('header.php'); ?>

       
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-pencil"></i> Edit Admin</h2>
                        <ul class="nav navbar-right panel_toolbox">
                       
                        
                        <!-- content starts here -->
<?php
  $query=mysql_query("select * from admin where username='$user'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>

                            <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Admin Image
                                    </label>
                                    <div class="col-md-4">
										<a href=""><?php if($row['admin_image'] != ""): ?>
										<img src="images/<?php echo $row['admin_image']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
										<?php else: ?>
										<img src="images/user.png" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
										<?php endif; ?>
										</a>
                                        <input type="file" style="height:44px; margin-top:10px;" name="image" id="last-name2" class="form-control col-md-7 col-xs-12">
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
$id =$_GET['username'];
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

$result=mysql_query("select * from admin") or die (mySQL_error());
$row=mysql_num_rows($result);

if($password != $confirm_password)
{
echo "<script>alert('Password do not match!')</script>";
}else
{
mysql_query(" UPDATE admin SET firstname='$firstname', middlename='$middlename', lastname='$lastname', username='$username', password='$password', 
confirm_password='$confirm_password', admin_image='$still_profile' WHERE username = '$user' ")or die(mysql_error());
echo "<script>alert('Successfully Update Admin Info!'); window.location='admin.php'</script>";	
}
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
// $admin_type = $_POST['admin_type'];

$result=mysql_query("select * from admin") or die (mySQL_error());
$row=mysql_num_rows($result);

if($password != $confirm_password)
{
echo "<script>alert('Password do not match!'); window.location='admin_profile.php'</script>";
}else

{		
mysql_query(" UPDATE admin SET firstname='$firstname', middlename='$middlename', lastname='$lastname', username='$username', password='$password', 
confirm_password='$confirm_password', admin_image='$profile' WHERE username = '$user' ")or die(mysql_error());
echo "<script>alert('Successfully Updated Admin Info!'); window.location='admin.php'</script>";
}

}
}
?>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

