
<?php
require_once 'admin_session.php';
require_once 'admin_logout.php';
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
				
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class = "dropdown">
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#" title="Click to View Admin and Trainees info"><span class = "glyphicon glyphicon-cog"></span> Account<span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li><a href = "admin_logoutcheck.php"><span class = "glyphicon glyphicon-user"></span> Logout</a></li>	
					</ul>
				</li>

				<li class = ""><a href = "trainee_logrecycle.php"><span class = "glyphicon glyphicon-edit"></span> trainee log from recycle Bin</a></li>
			
				
	
				</ul>
			<br />
<?php include ('header.php');

	?>

   
                    <div class="x_title">
					
                       <h3><i class="fa fa-users"></i> Trainee's Information</h3><button  data-toggle="modal" data-target="#admin_modal" type="submit" name="submit" class="btn btn-danger"><i class="fa fa-plus-delete"></i> Delete All trainees from recycle Bin</button></center>
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
									<th>Full Name</th>
									
									<th>Course</th>
									<th>Year Level</th>
									<th>School</th>
									<th>Status</th>
									<th>Action</th>
									</tr>
							</thead>
							<tbody>
	
							
							<?php
						if (isset($_GET['school_number']))
							$id=$_GET['school_number'];
		
						$admin = $conn->query("SELECT * FROM `backup_student` order by `school_number` ASC") or die(mysqli_error());
						while($row = $admin->fetch_array()){
					$id=$row['school_number'];
							
							?>
							
						
							<tr>
					
								<td><a target="_blank"<?php echo $row['school_number']; ?>"><?php echo $row['school_number']; ?></a></td> 
								<td><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></td> 
							
							
							
								<td><?php echo $row['course']; ?> </td> 
								<td><?php echo $row['year']; ?> </td> 
									<td><?php echo $row['school']; ?></td> 
									<td><?php echo $row['status']; ?></td> 
									
								<td>
									<a title ="Move trainee"  for="ViewAdmin"  href="#undo<?php echo'?school_number='.$id;  ?>" data-toggle="modal" data-target="#undo<?php echo $id;?>">
										<img src="images/recycle.png" width="30px" height="25px" />
										</a>
										
							
					
						
							
						
								
									<a title="Delete Trainee" href="#delete<?php echo '?school_number='.$id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
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
													<h4>Do you want to permanently delete <?php echo $id; ?>  record?</h4>
												</div>
												
												
												
												<div class="modal-footer">
												
												<a href="delete_recycle_student.php<?php echo '?school_number='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
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
												<div class="alert alert-danger">
													<h4>Do you want to remove <?php echo $id; ?> from recycle Bin?</h4>
												</div>
												
												
												
												<div class="modal-footer">
												
												<a href="undo_student.php<?php echo '?school_number='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
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
<form action="deleteall_recycle.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                             
							  <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <center><h4><i class="fa fa-delete"></i>Delete all Trainee permanently from Recycle Bin</h4></center>
                   
								
						<br>
<br>							
								
                            
              <center>
				<input type="submit"  class="btn btn-success"name="add" value="Continue" class="btn btn-primary"/>
			   <a href="studentrecord_backup.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
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

