
<?php

	include('session.php');
include('log_out.php');
?>

<!DOCTYPE html>

<html lang = "eng">
	<head>
  <title>OJT Account</title>
  <link href="index.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.png" type="image" />

		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<style>
      .body {
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
					<li><a href="allojt_logs.php" ><span class = "glyphicon glyphicon-user"></span>All OJT Logs</a></li>
									
				</ul>
			<br />
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
             <form action= "login_recyclebin.php"method="post" enctype="multipart/form-data"  align="" class="form-horizontal form-label-left">
                              
 <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
					   <center><h2><i class="fa fa-clear"></i> Administrator</h2></center>
                        <center><h3><i class="fa fa-clear"></i> Manage Trainee Logs</h3></center>
						
							<br>
							<br>
							
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">User Name
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" value="" name="username" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Password
                                    </label>
                                    <div class="col-md-4">
                                        <input type="password" value="" name="password" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                               
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                       
                                        
										<button type="submit" name="update" class="btn btn-success"><i class="glyphicon glyphicon-go"></i> GO</button>
                                     <a href="home.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
									</div>
                                </div>
								
								
							
								
                            </form>
							

    
	
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
<?php
include ('header.php');
?>
<style>
body{
background:aliceblue no-repeat center top scroll;
background-size: 100%;	
font-family: arial;
}


</style>
<body>


   
 