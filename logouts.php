<?php
session_start();
	$_SESSION['student'] = '';
	
unset($_SESSION);
session_destroy();
	header('Location:index.html');
	exit;


?>