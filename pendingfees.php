<?php
include_once("header.php");
?>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="admin.php">Home</a></li>
        <li><a href="fees.php">SUBMIT FEES</a></li>
        <li><a href="showfees.php"> SHOW FEES STATUS</a></li>
        <li class="active"> <a href="pendingfees.php"> PENDING FEES </a> </li> 
         
      </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > FEES STATUS </h4>
</div>
<script>
function detail(a)
{
	window.location.href='?adno='+a;	
}

</script>

<div class="jumbotron" style="height:600px">

<h4 style="text-align:center">


<p> </p>
<label> SELECT MONTH </label>
<select name="month" onchange="detail(this.value)">
<option value="select month"> SELECT MONTH </option>
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
 
</h4>


<p> </p>

<table class="table table-striped table-bordered table-hover table-condensed" style="text-align:center">
<tr>
	
    <td style="width:100px"> STUDENT ID </td>
    <td style="width:350px"> NAME </td>
    <td style="width:350px"> FATHER's NAME </td>
    <td style="width:100px"> CLASS </td>
    <td style="width:100px"> SUBMIT FEES </td>
   
   
 </tr>
 <?php
 if((isset($_REQUEST['adno'])))
	{
		//else
		//{
		//		$_SESSION['month']=$_REQUEST['adno'];
		//		$query="select * from student_registration where not exists(select adm_no from fees where month= '".$_REQUEST['adno']."'limit 0,10)";
		//		$result=mysqli_query($conn,$query);
		//}
		
		
				$_SESSION['month']=$_REQUEST['adno'];
				$query="select * from student_registration where adm_no not in (select adm_no from fees where month= '".$_REQUEST['adno']."') ";
				
				$result=mysqli_query($conn,$query);
				while($row=mysqli_fetch_assoc($result))
				{
				
				
				
							echo '<tr>';
					echo '<td>'.$row['adm_no'].'</td>';
					echo '<td>'.$row['student_name'].'</td>';
					echo '<td>'.$row['father_name'].'</td>';
					echo '<td>'.$row['class'].'</td>';
					echo '<td> <a href=fees.php?adno='.$row['adm_no'].'><span class="glyphicon glyphicon-pencil"> </span>  </td>';
			

					echo '</tr>';
				}
		
		
					
	//if($result)
	//{
	//while($row=mysqli_fetch_assoc($result))
	//{
	//		echo '<tr>';
	//		echo '<td>'.$row['adm_no'].'</td>';
	//		echo '<td>'.$row['student_name'].'</td>';
	//		echo '<td>'.$row['father_name'].'</td>';
	//		echo '<td> <a href=fees.php?adno='.$row['adm_no'].'><span class="glyphicon glyphicon-pencil"> </span>  </td>';
			

	//		echo '</tr>';
	//}
	
	//}
	 	
	
	
	
}
else
	{
			echo mysqli_error($conn);
	}
	
	
 
 ?>
 
 </table>
 </div>
 
 </div>

 
 <?php
 include_once("footer.php");
 ?>




