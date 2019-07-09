<?php


$servername="localhost:8080";
$username="root";
$password="";

$con= mysqli_connect($servername,$username,$password);

if($con-> mysqli_connect_error())
{
	die("die connection failed". $con-> mysqli_connect_error());
	
}

echo "Connected Successfully";








?>