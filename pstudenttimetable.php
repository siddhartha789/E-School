<?php
include_once("headerp.php");
?>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li ><a href="parentshome.php">Home</a></li>
        
               </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4>  SHOW STUDENT TIME-TABLE </h4>
</div>
<div class="jumbotron" style="height:520px">
<div style="text-align:center">


<form action="pstudenttimetable.php" method="post">
<label> Class: </label>
<select name="class" style="width:50px">
<?php
$query="select distinct class from student_registration";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
	
	echo '<option value='.$row['class'].'>'.$row['class']. '</option>';
}
?>
</select>
<button type="submit" class="btn-group-justified" > SHOW </button>
</form>

</div>
 
<table class="table table-striped table-bordered table-hover table-condensed">
<tr>
<td>
<label> TIME </label>
</td>
<td>
<label> MONDAY </label>
</td>
<td>
<label> TUESDAY </label>
</td>
<td>
<label> WEDNESDAY </label>
</td>
<td>
<label> THURSDAY </label>
</td>
<td>
<label> FRIDAY </label>
</td>
<td>
<label> SATURDAY </label>
</td>
</tr>
<?php
if(isset($_POST['class']))
{
		$query2="select * from student_timetable where class='".$_POST['class']."'";
		$result2=mysqli_query($conn,$query2);
		while($row2=mysqli_fetch_assoc($result2))
		{	   echo '<tr>';
				echo '<td>'.$row2['time'].'</td>';
				echo '<td>'.$row2['monday'].'</td>';
				echo '<td>'.$row2['tuesday'].'</td>';
				echo '<td>'.$row2['wednesday'].'</td>';
				echo '<td>'.$row2['thursday'].'</td>';
				echo '<td>'.$row2['friday'].'</td>';
				echo '<td>'.$row2['saturday'].'</td>';
				echo '</tr>';
		}
}

	
		

?>
</table>

<?php
include_once("footer.php");
?>



