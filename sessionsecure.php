<?php
session_start();
if($_SESSION['isadmin']!='YeS'){
	header('Location:index.html');
	$_SESSION['class']="";
	$_SESSION['month']="";
	exit;
	}

?>