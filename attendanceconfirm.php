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
        <li class="active"><a href="attendance.php"> ASSIGN ATTENDANCE </a></li>
        <li> <a href="showattendance.php"> SHOW ATTENDANCE </a></li>
        
        
               </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4> ASSIGN ATTENDANCE </h4>
</div>
<div class="jumbotron" style="height:520px">

<div class="col-lg-4">

</div>

<div class="col-lg-4">
<?php
$class= $_POST["hide"];
$date= $_POST["mydate"];
$month= $_POST["month"];

			$query="select * from student_registration where class='".$class."'";
			$result=mysqli_query($conn,$query);
			while($row=mysqli_fetch_assoc($result))
			{		$c =$row['adm_no'];
					 $sname=$row['student_name'];
					$b =$_POST[$c];
					
			
				$query2="insert into student_attendance set class='".$class."',student_id='".$c."',student_name='".$sname."',dat='".$date."',mont='".$month."',status='".$b."'";
				if(mysqli_query($conn,$query2))
				{
					
				
				}
				else
				{		
						echo mysqli_errno($conn);
				}
			}
			header("Location:showattendance.php?class=".$class."&month=".$month."");
			
	


?>

</div>

<div class="col-lg-4">

</div>