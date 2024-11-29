<?php
	session_start();
	if(!ISSET($_SESSION['admin_id'])){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Please login your account from recycle Bin .')
				window.location.href='home.php'
				</SCRIPT>");
				exiT();
	}