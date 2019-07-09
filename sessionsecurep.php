<?php
	session_start();
	if($_SESSION['parents']!='yes')
	{
			header('Location:index.html');
			exit;
	}
?>