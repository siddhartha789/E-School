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
        <li class="active"><a href="fees.php">SUBMIT FEES</a></li>
        <li><a href="showfees.php"> SHOW FEES STATUS</a></li> 
         
      </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > SUBMIT FEES </h4>
</div>

<div class="jumbotron" style="height:300px">

<div class="col-lg-3">

<div class="col-lg-6">
<?php

$a= $_POST["sname"];
$b= $_POST["fname"];
$c= $_POST["amount"];
$d= $_POST["sid"];
$e= $_POST["month"];


if($a=="")
	{
		echo "Student Name Is Required ";
		
		if($b=="")
		{
				echo "Father's Name Is Required ";
				
				if($c=="")
				{
						echo "Amount Can't Be Blank ";
						
				}
			
		}
		
		return false;
	}
	
		if($b=="")
		{
				echo "Father's Name Is Required ";
				
				if($c=="")
				{
						echo "Amount Can't Be Blank ";
						
				}
				return false;
			
		}
		
				if($c=="")
				{
						echo "Amount Can't Be Blank ";
						
						return false;
				}
else

{			$selStd= "insert into fees set adm_no='".$d."',student_name='".$a."',father_name='".$b."',amount='".$c."',month='".$e."'";
				if(mysqli_query($conn,$selStd))
				{
						header('Location:showfees.php?adno='.$e);
				}
				else
				{
						echo mysqli_error($conn);
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
