


								
	<?php
	
							require_once ('include/dbcon.php');
						
                
						

	$name = $_POST['name'];
	$position = $_POST['position'];
	
	
	


	
	$conn->query(" UPDATE  signatory set fullname = '$name' , position= '$position'");

		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "sign_position.php";
			</script>
		';	
			exit();		
				
	?>