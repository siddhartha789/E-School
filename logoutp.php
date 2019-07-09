<?php
session_start();
	$_SESSION['parents'] = '';
	
unset($_SESSION);
session_destroy();
	header('Location:index.html');
	exit;


?>