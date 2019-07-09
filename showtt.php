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
        <li><a href="timetable.php"> Create Student Time-Table</a></li>
        <li class="active"><a href="showtt.php"> Show Student Time-Table</a></li> 
         <li> <a href="createttt.php"> Create Teacher Time-Table </a> </li>
         <li> <a href="teacherttt.php"> Show Teacher Time-Table </a> </li>
               </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4>  SHOW STUDENT TIME-TABLE </h4>
</div>
<script>
function submitme(val)
{
	window.location.href='?class='+val;

}
</script>
<div class="jumbotron" style="height:520px">
<div style="text-align:center">

<label> Class: </label>
<select name="class" style="width:50px" onchange="submitme(this.value)">
<option value="NONE"> NONE </option>

<?php
	$query="select distinct classname from `class`";
	$result= mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		echo'<option value='.$row['classname'].'>'.$row['classname'].'  </option>';
	}
?>
</select>
<p> </p>
</div> 
<p> </p>
<?php
 	echo '<table class="table table-striped table-bordered table-hover table-condensed">';


 	echo'<tr>';

	echo'<td>  TIME  </td>';


	echo'<td> MONDAY  </td>';

	echo'<td> TUESDAY  </td>';

	echo'<td>  WEDNESDAY  </td>';

	echo'<td>  THURSDAY  </td>';

	echo'<td>  FRIDAY  </td>';
	echo'<td>  SATURDAY  </td>';
	echo '<td> EDIT </td>';
	echo '<td> DELETE </td>';

	echo'</tr>';
	if(isset($_REQUEST['class']) && $_REQUEST['class']!='')
	{
	$query2="select * from student_timetable where class='".$_REQUEST['class']."'";
	$result2=mysqli_query($conn,$query2);
	
	while($row2=mysqli_fetch_assoc($result2))
	{
		echo '<tr>';
		echo '<td>'.$row2['time'].'</td>';
		echo '<td>' .$row2['monday'].'</td>';
		echo '<td>' .$row2['tuesday'].'</td>';
		echo '<td>' .$row2['wednesday'].'</td>';
		echo '<td>' .$row2['thursday'].'</td>';
		echo '<td>' .$row2['friday'].'</td>';
		echo '<td>' .$row2['saturday'].'</td>';
		echo '<td> <a href=updatett.php?id='.$row2['id'].'><span class="glyphicon glyphicon-pencil"> </span> </a></td>';
		echo '<td> <a href=deletett.php?id='.$row2['id'].'><span class="glyphicon glyphicon-remove"></span></a></td>';
		echo '</tr>';
	}
	}
echo'</table>';
?>
</div>
</div>
<?php
include_once("footer.php");
?>



