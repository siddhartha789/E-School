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
        <li ><a href="admission.php">New Admission</a></li>
        <li class="active"><a href="showadmission.php"> Show Admissions</a></li> 
         <li> <a href="updateadmission.php"> Update Admissions </a> </li>
         
               </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > SHOW ADMISSIONS </h4>

</div>
<div class="jumbotron" style="height:600px">
<table class="table-bordered">
<tr>
<b>
	<td style="width:100px" > Admission No. </td>
    <td width="200px" align="center"> NAME </td>
    <td width="200px" align="center"> Father's Name </td>
    <td width="200px" align="center"> Mother's Name </td>
    <td width="50px" align="center"> Class </td>
    <td width="50px" align="center"> Section </td>
    <td width="160px" align="center"> Date Of Admission </td>
    <td width="120px" align="center"> Date Of Birth </td>
 </tr>
 <?php
 
	
 	$class= $_POST["class"];
	$query="select * from student_registration where class='" .$class."'";
 	$result2=mysqli_query($conn,$query);
	while($row2=mysqli_fetch_assoc($result2))
	{
			echo '<tr>';
			echo '<td align="center"> '.$row2['adm_no'].'</td>';
			echo '<td align="center" width="200px">' .$row2['student_name'].'</td>';
			echo '<td align="center" width="200px">' .$row2['father_name'].'</td>';
			echo '<td align="center" width="200px">' .$row2['mother_name'].'</td>';
			echo '<td align="center" width="50px">'.$row2['class'].'</td>';
			echo '<td align="center" width="50px">'.$row2['sec'].'</td>';
			echo '<td align="center" width="160px">'.$row2['date_of_admission'].'</td>';
			echo '<td align="center" width="120px">'.$row2['date_of_birth'].'</td>';
			echo '</tr>';
	}
	
 ?>

 </b>
 </table>

</div>



<?php
include_once("footer.php");
?>