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
        <li ><a href="attendance.php"> ASSIGN ATTENDANCE </a></li>
        <li class="active" > <a href="showattendance.php"> SHOW ATTENDANCE </a></li>
        
        
               </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4> SHOW ATTENDANCE </h4>
</div>
<div class="jumbotron" style="height:520px">

<?php

	if(isset($_POST['class']) && isset($_POST['month']))
	{
			$query2="select * from student_attendance where mont='".$_POST['month']."'and class='".$_POST['class']."'";
			$result2=mysqli_query($conn,$query2);
	}
	else if(isset($_REQUEST['class']) && isset($_REQUEST['month']))
	{
			$query2="select * from student_attendance where mont='".$_REQUEST['month']."'and class='".$_REQUEST['class']."'";
			$result2=mysqli_query($conn,$query2);
	}
	
			
			


?>

<form  class="form-group" method="post">
<table class="table">
<tr>
	<td> 

<label> Select Class: </label>
		</td>
       <td><select name="class" style="width:100px">
       <?php
	   	$query="select distinct class from student_registration";
		$result=mysqli_query($conn,$query);
		while($row=mysqli_fetch_assoc($result))
		{
				echo '<option value='.$row['class'].'>'.$row['class'].'</option>';
		}
		
		?>

	   

</select> </td>
</tr>
<tr>
	<td>
<label> Select Month: </label>
	</td>
    <td>
    
<select name="month" style="width:100px">
<option value="JAN"> JANUARY </option>
<option value="FEB"> FEBRUARY </option>
<option value="MAR"> MAR </option>
<option value="APR"> APRIL </option>
<option value="MAY"> MAY </option>
<option value="JUN"> JUNE </option>
<option value="JULY"> JULY </option>
<option value="AUG"> AUGUST </option>
<option value="SEP"> SEPTEMBER </option>
<option value="OCT"> OCTOBER </option>
<option value="NOV"> NOVEMBER </option>
<option value="DEC"> DECEMBER </option>
 </select>
</td>
</tr>
</table>
 <button type="submit" class="btn-group-justified" onclick="getvalue()"> SHOW </button>
</form>

<p> </p>


<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
	<tr>
        <td width="40px"> Class </td>
        <td width="150px"> Student Name </td>
        <td width="200px"> Date </td>
        <td width="200px"> Month </td>
        <td width="200px"> Status </td>
       </tr>
     <?php
	 	if(isset($_REQUEST['month']) || isset($_POST['month']))
		{
	 	while($row2=mysqli_fetch_assoc($result2))
		{
				echo '<tr>';
				echo '<td width="40px">'.$row2['class'].'</td>';
				echo '<td width="150px">'.$row2['student_name'].'</td>';
				echo '<td width="200px">'.$row2['dat'].'</td>';
				echo '<td width="200px">'.$row2['mont'].'</td>';
				echo '<td width="200px">'.$row2['status'].'</td>';
				echo '</tr>';
		}
		}
		
	 
	 ?>	
     
     </thead>
    <tbody>
    
    
    
    </tbody> 
    </table>
    

<?php
include_once("footer.php");

?>
