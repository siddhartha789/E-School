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
        <li ><a href="fees.php">SUBMIT FEES</a></li>
        <li class="active"><a href="showfees.php"> SHOW FEES STATUS</a></li> 
         
      </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > DELETE FEES STATUS </h4>
</div>

<div class="jumbotron" style="height:600px">

<h4 style="text-align:center">
<table class="table-bordered">
<?php
 if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
	{		$query2="select * from fees where id='".$_REQUEST['id']."'";
			$result=mysqli_query($conn,$query2);
			$row=mysqli_fetch_assoc($result);
			$query="delete from fees where id='".$_REQUEST['id']."'";
			if(mysqli_query($conn,$query))
			{
					header('Location:showfees.php?adno='.$row['month']);
			}
			else
			{
					echo mysqli_error($conn);
			}
	}
	else
	{
			echo '<h4> Please select the fees detail From Fees Details To Delete </h4>';
	}