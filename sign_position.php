
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
		
		<li><a href = "user.php"><span class = "glyphicon glyphicon-user"></span>OJT / Trainee</a></li>
			<li><a href = "admin_event.php"><span class = "glyphicon glyphicon-user"></span>Admin logs</a></li>
									
				</ul>
			<br />
<?php
include ('header.php');
?>



   <?php

       $sql = $conn->query("SELECT * FROM `signatory`") or die(mysqli_error());
						while($row = $sql->fetch_array()){
					?>
						
	<style>
	input[type=text] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
	text-align:center;
}
</style> 		
	<div class="form-group">
          <form action= "edit_signatory.php" method ="POST">  

							<center>	  <h4><b>	SET INCHARGE PERSONNEL </b></h4> <center>
                            		  <br>	
                                    <div class="">
                                 <center>  <center> <h4><b> Incharge person </b></h4>
								 <input type="text" value="<?php echo $row['fullname']; ?>" name="name"  required="required" class=" ">
                            
								<center> <h4><b> Position </b></h4> 
									<input type="text"  value = "<?php echo $row['position']; ?>" name="position" required="required" accept="'">
                            
						<br>
					<br>
						<br>
					<br>
     <center> <button  type="submit" name="edit" class="btn btn-success"><i class="fa fa"></i>Set Incharge </button>
					
           
			 
			</form>  
			
			<?php
			
			
			
						}
						
						?>
			 
</div>
</center>