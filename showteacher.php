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
        <li ><a href="teacher.php"> CREATE TEACHER ID</a></li>
        <li class="active"><a href="showteacher.php"> SHOW TEACHERS</a></li> 
         
      </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > SHOW TEACHERS </h4>
</div>

<div class="jumbotron" style="height:600px">
<p> </p>

<table class="table table-striped table-bordered table-hover table-condensed" style="text-align:center">
<tr>
	<td style="width:0px"> Teacher Id </td>
    <td style="width:200px"> Teacher Name </td>
    <td style="width:200px"> Subject To Be Teach </td>
    <td style="width:200px"> Class Teacher Of Class </td>
    <td style="width:200px"> Password </td>
    <td style="width:200px"> UPDATE</td>
    <td style="width:200px"> DELETE</td>
 </tr>
 <?php
 	if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
	{
		$pageno=($_REQUEST['page']*8)-8;
		$query="select * from teacher_login limit '".$pageno."',8";
		$result=mysqli_query($conn,$query);
	}
	else
	{
			$query="select * from teacher_login limit 0,8";
			$result=mysqli_query($conn,$query);
	}
	while($row=mysqli_fetch_assoc($result))
	{
			echo '<tr>';
			echo '<td> '.$row['teacher_id'].'</td>';
			echo '<td>' .$row['teacher_name'].'</td>';
			echo '<td>' .$row['subject'].'</td>';
			echo '<td>' .$row['classteacher'].'</td>';
			echo '<td>' .$row['pwd'].'</td>';
			echo '<td align="center"> <a href=updateteacher.php?id='.$row['teacher_id'].'> <h4 style="width:50px"><span class="glyphicon glyphicon-pencil"> </span>   </h4> </a> </td>'; 
			echo '<td align="center"> <a href=deleteteacher.php?id='.$row['teacher_id'].'> <h4 style="width:50px"> <span class="glyphicon glyphicon-remove"> 	</span></h4> </a> </td>';
			echo '</tr>';
	}
 
 
 ?>
 </table>
 <?php
 	$num=mysqli_num_rows($result);
	
	$num=$num/8;
	
	$num=ceil($num);
	
	
	echo '<h4 align="center"> PAGE: ';
	for($i=2;$i<=$num;$i++)
	{
			echo '<a href=showteacher.php?page='.$i.'>'.$i.'</a> |';
	}
	echo '</h4>';
	
?>
 
 
 </div>
 
 <?php
 
 include_once("footer.php");
 
 ?>

