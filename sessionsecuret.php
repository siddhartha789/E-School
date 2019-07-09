<?php
	session_start();
	if($_SESSION['teacher']!="yes")
	{
			header('Location:index.html');
			exit;
	}
	
	
?>