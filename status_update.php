


        
							<?php	
							require_once ('include/dbcon.php');
              if (isset($_GET['school_number']))
		$id=$_GET['school_number'];
							

									
								

	
		$sql = $conn->query("SELECT  remain_time = 0 FROM tbl_student WHERE school_number = '$id'") or die(mysqli_error());
							while($row = $sql->fetch_array()){
			
		
		if($row > 0){
			
			$conn->query("update tbl_student set status = 'Completed' where school_number = '$id'");
				
			
		}
		
							}
								?>
						
                   
          