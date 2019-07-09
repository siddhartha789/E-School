<?php
include_once("headert.php");
?>


<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li ><a href="teacherhome.php">Home</a></li>
        
               </ul>
    </div>
  </div>
</nav>
 <div class="hd">
<h4> UPLOAD VIDEO </h4>
</div>
<div class="jumbotron" style="height:520px">

<div class="col-lg-4">

</div>

<div class="col-lg-4">
<?php

$a= $_POST["video"];
$b= $_POST["class"];
$c= $_POST["subject"];

	if($a=="")
	{
			echo "Please Enter The URL Of The Video ";
			return false;
	}
	
	else
	{
			$query="insert into video_tutorial set class='".$b."',video_url='".$a."',subject='".$c."'";
			if(mysqli_query($conn,$query))
			{
				echo "Your Video Tutorial Is Submitted Successfully ";
			}
			else
			{
					 echo mysqli_error($conn);
			}
	}
	
	
	


?>
</div>

<div class="col-lg-4">

</div>

</div>
