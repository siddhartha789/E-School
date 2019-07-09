<?php
include_once('sessionsecurep.php');
include_once("db_connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-School Management System</title> 
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="icon" type="image/png" href="logo.png" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<style>
.hd
{
	
	text-align:center;
	background-color:#096;
}
</style>
<script src="js/jquery-1.11.3.js"> </script>
<script>
function classvalidate()
{
	
var a=$('#class').val();
var b=$('#sec').val();
if(a=="")
{
		$('#classalert').html("Class Is Required");
		$('#class').css('border-color','#F00');
		return false;
}
if(b=="")
{
		$('#secalert').html("Sec Is Required");
		$('#sec').css('border-color','#F00');
		return false;
}
else
{
		return true;
}


	
}



</script>

</head>


<body background="background.jpg">
 
<div class="container-fluid">
<div id="tooplate_header_wrapper">

    <div id="tooplate_header " >
    
         <img src ="header.png" class="img-responsive" /> 
        <div id="site_title">
        
        
 
 		       
        </div> 
        
