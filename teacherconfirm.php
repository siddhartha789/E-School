<?php
include_once("header.php");
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li ><a href="admin.php">Home</a></li>
        <li class="active"><a href="teacher.php">CREATE TEACHER ID</a></li>
        <li><a href="showteacher.php"> SHOW TEACHER'S</a></li> 
         
      </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > CREATE TEACHER ID </h4>
</div>

<div class="jumbotron" style="height:300px">

<div class="col-lg-3">

</div>

<div class="col-lg-6">

<?php
$a= $_POST["tname"];
$b= $_POST["password"];
$c= $_POST["subject"];
$d= $_POST["classteacher"];

	if($a=="")
	{
			echo "Teacher Field Cant Be Blank ";
			
			if($b=="")
			
			{
					echo "Password Cant Be Blank ";
			}
			
			return false;
	}
			if($b=="")
			
			{
					echo "Password Cant Be Blank ";
					return false;
			}
	
	else
	
	{
			$query="insert into teacher_login set teacher_name='" .$a. "',subject='".$c."',classteacher='".$d."',pwd='".$b."'";
			if(mysqli_query($conn,$query))
			{
					header('Location:showteacher.php');
			}
			else
			{
					echo mysqli_errno($conn);
			}
			
	}
?>

</div>

<div class="col-lg-3">

</div>


</div>



<?php

	include_once("footer.php");

?>
