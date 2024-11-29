<?php
	include('session.php');
include('log_out.php');
?>
<!DOCTYPE html>
<html lang = "eng">	
  <title>TRAINEES</title>
  <link href="index.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.png" type="image" />
	<head>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<style>
			.nav-pills {
            display: flex; 
            justify-content: center; 
            padding: 0; 
        }
        .nav-pills li {
            margin: 0 10px; 
        }
      .body {
    font-family: arial;
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
            margin: 0;
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

			.navbar-nav > li > a:hover {
				 }
				 .navbar {
    position: relative;
    z-index: 1050;}	 

    </style>
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					
					<p class = "navbar-text pull-right"> OJT Tracking System</p>
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
			<li><a href="allojt_logs.php" ><span class = "glyphicon glyphicon-user"></span>All OJT Logs</a></li>
				</ul>
			<br />
<?php include ('header.php');

	?>
<div class="x_title">
					 <h3><i class="fa fa-users"></i> Trainee's Information</h3>
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
								<tr>
<th>ID Number</th>
									<th>Date / Time Logged In</th>
<th>Date / Time Logged Out</th>
									<th>Total Rendered</th>
		</tr>
							</thead>
							<tbody>
	
							
							<?php
						if (isset($_GET['school_number']))
							$id=$_GET['school_number'];
		
						$admin = $conn->query("SELECT * FROM `check_in` order by `school_number` ASC") or die(mysqli_error());
						while($row = $admin->fetch_array()){
					$id=$row['school_number'];
							
							?>
							
						
							<tr>
					
								<td><?php echo  $row['school_number']; ?></a></td> 
								<td><?php echo $row['check_in']; ?></td> 
							
							
							
								<td><?php echo $row['check_out']; ?> </td> 
								<td><?php echo $row['total_rendered']; ?> </td> 
									
									
								
									
									
			
			
									<!-- delete modal user -->
									<div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> Trainee</h4>
										</div>
										<div class="modal-body">
												<div class="alert alert-danger">
													<h4>Do you want to permanently delete <?php echo $id; ?>  logged in / out logs?</h4>
												</div>
												
												
												
												<div class="modal-footer">
												
												<a href="delete_recycle_studentlogs.php<?php echo '?school_number='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
												<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
												</div>
								
										</div>
										</div>
									</div>
									</div>
									</center>
									
										<div class="modal fade" id="undo<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> Trainee</h4>
										</div>
										<div class="modal-body">
												<div class="alert alert-success">
													<h4>Do you want to restore <?php echo $id; ?> ?</h4>
												</div>
												
												
												
												<div class="modal-footer">
												
												<a href="undo_logsstudent.php<?php echo '?school_number='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
												<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
												</div>
												
												
										</div>
										</div>
									</div>
									</div>
									</center>
									
									
									
									
									
    


									
									
									
									
							
							


							



	<?php } ?>
	
			
				
				


				</td> 
							</tr>
						
							</tbody>
							</table>
						
						
                     
                    </div>
                </div>
            </div>
        </div>

<style>

	</style>
		
		
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
<form action="deleteall_recyclelogs.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                             
							  <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                   <div class="alert alert-danger">
                        <center><h4><i class="fa fa-delete"></i>Do you want to delete all OJT Logs permanently?</h4></center>
                   
</div>
<div>				
                            
              <center>
				<input type="submit"  class="btn btn-success"name="add" value="YES" class="btn btn-primary"/>
			   <a href="trainee_logrecycle.php"><button type="button" class="btn btn-danger"><i class="fa fa"></i> NO</button></a>
			  </center>
			  </form>
			   </form>
            </div>
        </div>
    </div>
	
</div>
</div>
</body>
</html>


