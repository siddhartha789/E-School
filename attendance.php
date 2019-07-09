<?php
include_once("headert.php");
?>
<script src="js/jquery-1.11.3.js"> </script>

<script>

function attendancevalidate()
{
	var a=$('#name').val();
	
	if(a=="")
	{
		$('#namealert').html("Name Is Required");
		$('#name').css('border-color','#F00');
		return false;
	}
	return true;

}
</script>

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
<div style="text-align:center">
<script>
function sendme(val)
{
		window.location.href='?class='+val
	
}
</script>


<form action="attendanceconfirm.php" method="post" onsubmit="return attendancevalidate()">
<div style="text-align:center">
<table class="table">
<tr>
<td>
<label> Select Class: </label>
</td>
<td>
<select name="class" style="width:50px" onchange="sendme(this.value)">
<option value=""> SELECT </option>
<?php
	$query="select distinct class from `student_registration`";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		
		echo'<option value='.$row['class'].'>'.$row['class'].' </option>';
	}
?>
</select>

</td>
</tr>

<tr>
<td>
<label> Date: </label>
</td>
<td>
<?php
 getdatecombo();
?>

</td>

</tr>

<tr>

<td>
<label> Month: </label>
</td>
<td>
<select name="month">
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
<table class="table table-striped table-bordered table-hover table-condensed" align="center" border="15px" bordercolordark="#000000">
<tr height="35px">
	<td width="300px"> STUDENT NAME </td>
    <td width="300px"> STATUS </td>
</tr>
<?php

if(isset($_REQUEST['class']) && $_REQUEST['class']!=''){
	$query2="select * from student_registration where class=".$_REQUEST['class'];
	$result2=mysqli_query($conn,$query2);
	

while($row2=mysqli_fetch_assoc($result2))
{
	echo '<tr height="35px">';
	echo '<td width="300px" >'.$row2['student_name'].'</td>';
	echo '<td width="300px"> <select name='.$row2['adm_no'].'>';
	echo ' <option value="P"> P </option>';
 echo '<option value="A"> A </option>';
 echo '<option value="L"> L </option>';
 echo '</select> </td>';
 echo '</tr>';
 echo '<tr>  </tr>';
 echo '<tr>  </tr>';

}
}
else
{
		$row2['student_name']="";
		$row2['adm_no']="";
		$result2="";
}
?>
</table>
</div>

<p> </p>
<p> </p>
<p> </p>
<p> </p>

<input type="hidden" name="hide" value="<?php echo $_REQUEST['class'] ?>"/> 

 <button type="submit" class="btn-group-justified"> ASSIGN </button>
</form>
</div>
<?php
function getdatecombo()
{
	$combo = '<select name="mydate">';
		$day=1;
		for($a=1;$a<=31;$a++)
		{
			$combo.='<option value="'.$a.'">'. $a.' </option>';
		
		}
	$combo .= '</select>';
	
	
	echo $combo;

}
?>
<?php
include_once("footer.php");
?>
