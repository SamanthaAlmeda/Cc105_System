<?php
	session_start();
	if(!ISSET($_SESSION['id'])){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Please login your account first.')
				window.location.href='main.php'
				</SCRIPT>");
				exiT();
	}
	
	
	
	?>