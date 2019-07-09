<?php
include_once("header.php");

include_once("db_connect.php");

?>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li ><a href="admin.php">Home</a></li>
        <li ><a href="class.php">New Class</a></li>
        <li><a href="showclass.php"> Show Available Classes</a></li> 
         
      </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4> NEW CLASS </h4>
</div>
<div class="jumbotron" style="height:300px">
<?php
$classname= $_POST['classname'];
$sec= $_POST['sec'];
if($classname=="")
{
		echo "Please Enter Class ";
		if($sec=="")
		{
				echo "Please Enter Section ";
		}
		
}

else if($sec=="")
{
		echo "Please Enter Section ";
}
else
{
	$insqry = "insert into class set sec = '".$sec."',classname = '".$classname."'";
	//echo $insqry ; 
	//exit;
	if(mysqli_query($conn,$insqry)){
	echo $classname;
	echo " Class And Section ";
	echo $sec;
	echo " is Created Successfully ";
	}
	else{
			echo mysqli_error($conn);
			echo "Alee yeh kya hogyaa. ";
		}
}
?>
</div>



<?php
include_once("footer.php");
?>