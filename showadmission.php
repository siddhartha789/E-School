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
<script>
function submitme(val)
{
	window.location.href='?class='+val;

}
</script>

		


<div class="hd">
<h4 > SHOW ADMISSIONS </h4>

</div>
<div class="jumbotron" style="height:600px">


<div style="text-align:center">
<label> CLASS </label>
<select name="class" value="class" style="width:60px" onchange="submitme(this.value)" >
<option value="none"> NONE </option>
<?php

$query="select distinct classname from `class`";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
			echo '<option value=' .$row['classname'].'>' .$row['classname'].'</option>';
		
	}


	

?>
</select>

<table class="table table-striped table-bordered table-hover table-condensed">
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
    <td> UPDATE </td>
    <td> DELETE </td>
 </tr>
 <?php
if((isset($_REQUEST['class']) && $_REQUEST['class']!='') || (isset($_GET['page']))){
	
	
	if(isset($_GET['page']) && $_GET['page']!=1)
	{
			$b=$_GET['page'];
			$page=$b*8 -8;
			 $query2="select * from student_registration where class='".$_SESSION['class']."'limit ".$page.",8";
			
	}
	else
	{
			$page= 0;
			$c=$_REQUEST['class'];
			$_SESSION['class']=$_REQUEST['class'];
			 $query2="select * from student_registration where class='".$c."'limit ".$page.",8";
	}
	

	
	
	 $result=mysqli_query($conn,$query2);
	
	while($row2=mysqli_fetch_assoc($result))
			{
			echo '<tr height="50px">';
			echo '<td align="center"> '.$row2['adm_no'].'</td>';
			echo '<td align="center" width="200px">' .$row2['student_name'].'</td>';
			echo '<td align="center" width="200px">' .$row2['father_name'].'</td>';
			echo '<td align="center" width="200px">' .$row2['mother_name'].'</td>';
			echo '<td align="center" width="50px">'.$row2['class'].'</td>';
			echo '<td align="center" width="50px">'.$row2['sec'].'</td>';
			echo '<td align="center" width="160px">'.$row2['date_of_admission'].'</td>';
			echo '<td align="center" width="120px">'.$row2['date_of_birth'].'</td>';
			echo '<td align="center" width="50px"> <a href=updateadmission.php?id='.$row2['adm_no'].'> <span class="glyphicon glyphicon-pencil"> </span>  </td>   </a> ';
			echo '<td align="center" width="50px"> <a href=deleteadmission.php?id='.$row2['adm_no'].'>  <span class="glyphicon glyphicon-remove"> 	</span> </td> </a>';
			echo '</tr>';
			}
			if(isset($_REQUEST['class']))
			{
			$query3="select * from student_registration where class='".$_REQUEST['class']."'";
			}
			else
			{
				$query3="select * from student_registration where class='".$_SESSION['class']."'";
			}
			
			$resul2=mysqli_query($conn,$query3);
			
			$num=mysqli_num_rows($resul2);
			
			$pageno=$num/8;
			$pageno=ceil($pageno);
			echo '</table>';
			echo '<h4 align="center"> Page: ';
			
			for($a=2;$a<=$pageno;$a++)
			{    
				echo ' <a href=showadmission.php?page='.$a.'>'.$a.' </a> ';
			}
			echo '</h4>';
			
			
			
			
			
	
	


}
else
{
		$row2['adm_no']="";
		$row2['student_name']="";
		$row2['father_name']="";
		$row2['mother_name']="";
		$row2['class']="";
		$row2['sec']="";
		$row2['date_of_admission']="";
		$row2['date_of_birth']="";
}
?>
</table>
 </b>
 
 
</div> 

<p> </p>


</div>



<?php
include_once("footer.php");
?>