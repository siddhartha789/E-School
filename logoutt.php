<?php
session_start();
	$_SESSION['teacher'] = '';
	
unset($_SESSION);
session_destroy();
	header('Location:index.html');
	exit;


?>