
<?php
require_once 'session.php';
require_once 'log_out.php';
include('update_trainee_status.php');
?>
<!DOCTYPE html>
<html lang = "eng">
 <title>OJT - USER</title>
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
		
		<li><a href = "user.php"><span class = "glyphicon glyphicon-user"></span>OJT / Trainee</a></li>
			<li><a href = "admin_event.php"><span class = "glyphicon glyphicon-user"></span>Admin logs</a></li>
				<li class = ""><a   href="allojt_logs.php" ><span class = "glyphicon glyphicon-user"></span>All OJT Logs</a></li>
				</ul>
			<br />
<?php include ('header.php');

	?>
<div class="x_title">
	<h3><i class="fa fa-users"></i> OJT's Information</h3><button  data-toggle="modal" data-target="#admin_modal" type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Add Trainee</button></center>
        <ul class="nav navbar-right panel_toolbox">
        </ul>
	<div class="ln_solid"></div>
         <div class="form-group">
         <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
        </div>
      </div>
    <div class="clearfix"></div>
       </div>
    <div class="x_content">
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								
							<thead>
								<tr >
						            <th >ID Number</th>
									<th>Full Name</th>
									<th>Course</th>
									<th>Year Level</th>
									<th>School</th>
									<th>Remaining time(hr)</th>
									<th>Finished time(hr)</th>
								    <th>Status</th>
									<th>Action</th>
									</tr>
							</thead>
							<tbody>
	
							<?php

						if (isset($_GET['school_number']))
							$id=$_GET['school_number'];
						$admin = $conn->query("SELECT status = 'Completed' FROM `tbl_student`") or die(mysqli_error());
						
						$admin = $conn->query("SELECT * FROM `tbl_student` order by `school_number` ASC") or die(mysqli_error());
						while($row = $admin->fetch_array()){
					$id=$row['school_number'];
							
?>
<tr >
	<td><a target="_blank"<?php echo $row['school_number']; ?>"><?php echo $row['school_number']; ?></a></td> 
	<td><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></td> 
	<td><?php echo $row['course']; ?> </td> 
	<td><?php echo $row['year']; ?> </td> 
	<td><?php echo $row['school']; ?></td> 
	<td><?php echo $row['remain_time']; ?></td> 
	<td><?php echo $row['finish_time']; ?></td> 
	<td><?php echo $row['status']; ?></td> 
<td>
	
<a title="Edit Trainee record" href="edit_user.php<?php echo $id; ?>" data-toggle="modal" data-target="#edit_user<?php echo $id; ?>"/>
<img src="images/edits.png" width="30px" height="25px" />	
</a>
									
<a title="Delete Trainee and logs" href="#delete<?php echo '?school_number='.$id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
<img src="images/deletes.png" width="30px" height="25px" />
</a>

<!-- delete modal user -->
<div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> Trainee</h4>
</div>
<div class="modal-body">
<div class="alert alert-danger">
<h4>Do you want to delete <?php echo $id; ?> his/her work time record?</h4>
</div>
<div class="modal-footer">
<a href="delete_user.php<?php echo '?school_number='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
</div>
	</div>
		</div>
			</div>
				</div>

<div class="modal fade" id="edit_user<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">	
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
	<div class="modal-body">
	<form action= "edit_user.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
	<center><h2><i class="fa fa-pencil"></i> Edit OJT</h2></center>
<form action="your-action-url" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <center>
            <label class="control-label col-md-4" for="school_number">ID Number:</label>
            <input type="text" value="<?php echo $row['school_number']; ?>" class="select2_single form-control" name="school_number" id="school_number">
        </center>
    </div>
    <br>

    <div class="form-group">
        <center>
            <label class="control-label col-md-4" for="firstname">First Name:</label>
            <input type="text" value="<?php echo $row['firstname']; ?>" class="select2_single form-control" name="firstname" id="firstname">
        </center>
    </div>
    <br>

    <div class="form-group">
        <center>
            <label class="control-label col-md-4" for="middlename">Middle Name:</label>
            <input type="text" class="select2_single form-control" name="middlename" value="<?php echo $row['middlename']; ?>" placeholder="MI / Middle Name..." id="middlename">
        </center>
    </div>
    <br>

    <div class="form-group">
        <center>
            <label class="control-label col-md-4" for="lastname">Last Name:</label>
            <input type="text" value="<?php echo $row['lastname']; ?>" class="select2_single form-control" name="lastname" id="lastname">
        </center>
    </div>

    <div class="form-group">
        <center>
            <label class="control-label col-md-4" for="gender">Gender:</label>
            <select name="gender" class="select2_single form-control" id="gender">
                <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </center>
    </div>
    <br>

    <div class="form-group">
        <center>
            <label class="control-label col-md-4" for="address">Address:</label>
            <input type="text" value="<?php echo $row['address']; ?>" class="select2_single form-control" name="address" id="address">
        </center>
    </div>
    <br>

    <div class="form-group">
        <center>
            <label class="control-label col-md-4" for="course">Course:</label>
            <input type="text" value="<?php echo $row['course']; ?>" class="select2_single form-control" name="course" id="course">
        </center>
    </div>

    <div class="form-group">
        <center>
            <label class="control-label col-md-4" for="year">Year:</label>
            <select name="year" class="select2_single form-control" id="year">
                <option value="<?php echo $row['year']; ?>"><?php echo $row['year']; ?></option>
                <option value="3rd Year">3rd Year</option>
                <option value="4th Year">4th Year</option>
            </select>
        </center>
    </div>
    
    <div class="form-group">
        <center>
            <label class="control-label col-md-4" for="school">School <span style="color: darkgray;">(Acronym)</span>:</label>
            <input type="text" value="<?php echo $row['school']; ?>" class="select2_single form-control" name="school" id="school" maxlength="10">
        </center>
    </div>

    <div class="form-group">
        <center>
            <label class="control-label col-md-4" for="totaltime_render">Total time to be Accomplished <span style="color: darkgray;">(In Hours)</span>:</label>
            <input type="number" value="<?php echo $row['totaltime_render']; ?>" class="select2_single form-control" name="totaltime_render" id="totaltime_render" maxlength="10">
        </center>
    </div>

    <div class="modal-footer">
        <center>
            <input type="submit" value="Edit" class="btn btn-success" />
        </center>
    </div>
</form>

    </div>
<?php } ?>
	</td> 
	</tr>
	</tbody>
	</table>
	</div>
     </div>
     </div>
     </div>
	
</head>		
<body>	
<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
      
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
     
<div class="modal fade" id="admin_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
<form action="add_user.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                             
							  <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                    <center><h2><i class="fa fa-pencil"></i>Add OJT</h2></center>

<form action="your-action-url" method="post" enctype="multipart/form-data" class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-md-4" for="first-name">ID Number:</label>
        <div class="col-md-4">
            <input type="text" name="school_number" id="id" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-4" for="first-name">First Name:</label>
        <div class="col-md-4">
            <input type="text" name="firstname" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-4" for="first-name">Middle Name:</label>
        <div class="col-md-3">
            <input type="text" name="middlename" placeholder="MI / Middle Name" id="first-name2" class="form-control col-md-7 col-xs-12">
        </div>
        <span style="color:darkgray;">Optional</span>
    </div>
    <div class="form-group">
        <label class="control-label col-md-4" for="last-name">Last Name:</label>
        <div class="col-md-4">
            <input type="text" name="lastname" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-4" for="gender">Gender:</label>
        <div class="col-md-4">
            <select name="gender" class="form-control" required="required">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-md-4" for="address">Address:</label>
        <div class="col-md-4">
            <input type="text" name="address" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-4" for="course">Course:</label>
        <div class="col-md-4">
            <input type="text" name="course" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-4" for="year">Year:</label>
        <div class="col-md-4">
            <select name="year" class="form-control" required="required">
                <option value="3rd Year">3rd Year</option>
                <option value="4th Year">4th Year</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-4" for="school">School: </label>
        <span style="color:darkgray;">Acronym</span>
        <div class="col-md-4">
            <input type="text" name="school" id="last-name2" required="required" class="form-control col-md-7 col-xs-12" maxlength="10">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-4" for="totaltime_render">Total Time To be Accomplished </label>
        <span style="color:darkgray;">In hour</span>
        <div class="col-md-4">
            <input type="number" name="totaltime_render" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>

    <div class="form-group text-center">
        <input type="submit" class="btn btn-success" name="add" value="Continue" />
        <a href="user.php">
            <button type="button" class="btn btn-danger">
                <i class="fa fa-times-circle-o"></i> Cancel
            </button>


			   </form>
            </div>
        </div>
    </div>
	
</div>                         
	</div>
</body>
</html>

    <style>
  <style>
      body {
    font-family:normal arial;
    background-color: aliceblue; 
		}
		
        .navbar {
			background: linear-gradient(to right, steelblue, white) !important;
            border: none; 
		}

        .navbar-text {
			font-family:normal arial;
            font-size: 24px; 
            color: white !important; 
            font-weight: bold;
            
        }

		.dropdown-menu {
            background-color: white;
        }

        .dropdown-menu a {
            color: black !important; 
        }

        .dropdown-menu a:hover {
            background-color: lightgray;
        }
		.navbar-nav > li > a {
            color: brown!important;}    

.form-horizontal {
    max-height: 80vh; 
    overflow-y: auto; 
    overflow-x: hidden; 
}

.form-group.text-center {
    display: flex;
    justify-content: center; 
    gap: 10px; 
    margin-top: 20px; 
}


.form-group.text-center .btn {
    width: auto;  
    display: inline-flex;  
    padding: 10px 20px;  
}


    </style>

</style>
