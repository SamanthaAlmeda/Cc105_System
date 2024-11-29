<?php
	
	if(!ISSET($_SESSION['id'])){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Please login your account first.')
				window.location.href='home.php'
				</SCRIPT>");
				exiT();
	}
	
	
	
	?>