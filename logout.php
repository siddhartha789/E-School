<?php
session_start();
	$_SESSION['adminid'] = '';
	$_SESSION['isadmin'] = '';
unset($_SESSION);
session_destroy();
	header('Location:index.html');
	exit;


?>