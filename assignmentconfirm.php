<?php
include_once("headert.php");
?>



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
<h4> ASSIGNMENT </h4>
</div>
<div class="jumbotron" style="height:520px">


<div class="col-lg-3">

</div>

<div class="col-lg-6">

<?php

$a= $_POST["title"];
$b= $_POST["class"];


	if($a=="")
	{
			echo " Title Of The Assignment Could Not Be Blank ";
			
			return false;
	}
	
	else
	{
			
		$target_dir = "assignment/";
		$target_file = $target_dir . basename($_FILES["assignmentupload"]["name"]);
		$uploadOk = 1;
		if (file_exists($target_file)) {
    	
    	$uploadOk = 0;
		}
		if($uploadOk==0)
		{
			echo "Sorry, file already exists.";
		}
		else
		{
		if(move_uploaded_file($_FILES["assignmentupload"]["tmp_name"], $target_file) )
		{
		$query="insert into assignment set link='".$target_file."',title='".$a."',class='".$b."'";
		if(mysqli_query($conn,$query))
		{
		echo '<h4><a href="'.$target_file.'">'.$a. ' IS UPLOADED SUCESSFULLY</h4>';
		}
		else
		{
				echo mysqli_error($conn);
		}
		}
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