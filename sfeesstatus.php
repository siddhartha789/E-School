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
<h4 > FEES STATUS </h4>
</div>

<div class="jumbotron" style="height:600px">

<h6 style="text-align:center">


<p> </p>
<form action="sfeesstatus.php" method="post">
<label> SELECT MONTH </label>
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
 <p> </p>
 <button type="submit" class="btn-group-justified"> SHOW </button>
</form>
 </h6>


<p> </p>

<table class="table table-striped table-bordered table-hover table-condensed">
<tr>
	
    <td style="width:150px"> STUDENT ID </td>
    <td style="width:150px"> NAME </td>
    <td style="width:150px"> FATHER's NAME </td>
    <td style="width:150px"> FEES SUBMITED </td>
 </tr>
 <?php
 	if(isset($_POST['month']))
	{
			$query="select * from fees where month='".$_POST['month']."' and adm_no='".$_SESSION['admno']."'";
			$result=mysqli_query($conn,$query);
			while($row=mysqli_fetch_assoc($result))
			{
					echo '<tr>';
					echo '<td>'.$row['adm_no'].'</td>';
					echo '<td>'.$row['student_name'].'</td>';
					echo '<td>'.$row['father_name'].'</td>';
					echo '<td>'.$row['amount'].'</td>';
					echo '</tr>';
			}
	}
 ?>
 
 </table>
 
 </div>
 
 <?php
 include_once("footer.php");
 ?>




