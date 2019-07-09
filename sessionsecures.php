<?php
session_start();
if($_SESSION['student']!='yes'){
	header('Location:index.html');
	exit;
	}

?>