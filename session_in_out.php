<?php
	session_start();
		session_unset('id');
	if(!ISSET($_SESSION['id'])){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				
				window.location.href='../admin/mods/index.php'
				</SCRIPT>");
				exiT();
	}