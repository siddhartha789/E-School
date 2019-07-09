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
<h4> SHOW ATTENDANCE </h4>
</div>
<div class="jumbotron" style="height:520px">
<div style="text-align:center">
<table style="text-align:center">

<form action="pstudentattendance.php" method="post">
<tr>
<td>
<label> SELECT STUDENT ID </label>
</td>
<td>
<select name="studentid">
<?php
$query="select adm_no from student_registration where fmob_no='".$_SESSION['mobno']."'";
$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		
		echo '<option value='.$row['adm_no'].'>'.$row['adm_no']. '</option>';
	}
?>
</select>
</td>
</tr>
<tr>
<td>
<label> Select Month: </label>
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
</div>
 <button type="submit" class="btn-group-justified"> SHOW </button>
</form>

<p> </p>

<table class="table-bordered">
	<thead>
	<tr>
    	
        <td width="40px"> Class </td>
        <td width="150px"> Student Name </td>
        <td width="200px"> Date </td>
        <td width="200px"> Month </td>
        <td width="200px"> Status </td>
       </tr>
    <?php
 	if(isset($_POST['studentid']) && isset($_POST['month']))
	{
			 $query2="select * from student_attendance where student_id='".$_POST['studentid']."' and mont='".$_POST['month']."'";
			$result2=mysqli_query($conn,$query2);
			while($row2=mysqli_fetch_assoc($result2))
			{
					echo '<tr>';
					echo '<td>'.$row2['class'].'</td>';
					echo '<td>'.$row2['student_name'].'</td>';
					echo '<td>'.$row2['dat'].'</td>';
					echo '<td>'.$row2['mont'].'</td>';
					echo '<td>'.$row2['status'].'</td>';
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
