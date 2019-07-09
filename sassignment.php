<?php
include_once("headers.php");
?>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li ><a href="studenthome.php">Home</a></li>
        
         
      </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > ASSIGNMENTS </h4>
</div>

<div class="jumbotron" style="height:600px">

<div style="text-align:center">
<form action="sassignment.php" method="post">
<label> SELECT CLASS: </label>




<select name="class" style="width:80px">
<?php
	$query="select distinct class from assignment";
	$result= mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
			echo '<option value='.$row['class'].'>'.$row['class'].'</option>';
	}

?>
</select>

</div>
<button type="submit" class="btn-group-justified"> SHOW ASSIGNMENTS </button>
</form>
<table class="table table-striped table-bordered table-hover table-condensed">
<?php
	
	if(isset($_POST['class']))
	{
			$query2="select * from assignment where class='".$_POST['class']."'";
			$result2=mysqli_query($conn,$query2);
			while($row2=mysqli_fetch_assoc($result2))
			{
					echo '<tr>';
					echo '<td> <a href='.$row2['link'].'>'.$row2['title'].'</td></a>';
					echo '</tr>';
					echo '<hr>';
			}
	}

?>
</table>


<?php
include_once("footer.php");
?>
