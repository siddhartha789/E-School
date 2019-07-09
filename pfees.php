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
<h4 > FEES STATUS </h4>
</div>

<div class="jumbotron" style="height:600px">

<div style="text-align:center">

<form action="pfees.php" method="post">
<table>
<tr>

</tr>
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
<label> SELECT MONTH </label>
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

<table class="table-bordered" style="text-align:center">
<tr>
	
    <td style="width:150px"> STUDENT ID </td>
    <td style="width:150px"> NAME </td>
    <td style="width:150px"> FATHER's NAME </td>
    <td style="width:150px"> FEES SUBMITED </td>
 </tr>
 <?php
 	if(isset($_POST['studentid']) && isset($_POST['month']))
	{
			 $query2="select * from fees where adm_no='".$_POST['studentid']."' and month='".$_POST['month']."'";
			$result2=mysqli_query($conn,$query2);
			while($row2=mysqli_fetch_assoc($result2))
			{
					echo '<tr>';
					echo '<td>'.$row2['adm_no'].'</td>';
					echo '<td>'.$row2['student_name'].'</td>';
					echo '<td>'.$row2['father_name'].'</td>';
					echo '<td>'.$row2['amount'].'</td>';
					echo '</tr>';
			}
	}
	
 
 
 ?>
 
 </table>
 
 </div>
 
 <?php
 include_once("footer.php");
 ?>




