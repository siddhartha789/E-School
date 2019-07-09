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
        <li class="active"><a href="subject.php">NEW SUBJECT</a></li>
        <li ><a href="showsubject.php"> Show Subjects</a></li> 
         
         
               </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > CREATE SUBJECT </h4>

</div>
<div class="jumbotron" style="height:600px">

<?php
$class= $_POST["class"];
$subject= $_POST["subject"];

	if($subject=="")
	{
			echo '<h3 style="color:red"> Please Enter Subject Name </h3>';
	}
	else
	{
			$query="insert into subjects set subject='" .$subject. "',class='" .$class. "'";
			if(mysqli_query($conn,$query))
			{
				echo '<h3 style="color:blue"> Subject Created Successfully </h3>';
			}
			else
			{
					echo mysqli_errno($conn);
			}
	}
	

?>
</div>


<p> </p>


</div>



<?php
include_once("footer.php");
?>