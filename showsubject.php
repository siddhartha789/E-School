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
        <li ><a href="subject.php">NEW SUBJECT</a></li>
        <li class="active"><a href="showsubject.php"> Show Subjects</a></li> 
         
         
               </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > SHOW SUBJECT </h4>

</div>
<div class="jumbotron" style="height:600px">
<table class="table table-striped table-bordered table-hover table-condensed" align="center">
<tr>
	<td style="width:200px" align="center"> SUBJECT </td>
    <td style="width:200px" align="center"> CLASS </td>
    <td style="width:100px" align="center"> UPDATE </td>
    <td style="width:100px" align="center"> DELETE </td>
    
</tr>
<?php
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
{	
	$pageno=($_REQUEST['page']*8)-8;
	$query= "select * from `subjects` limit'".$pageno."',8";
	$result= mysqli_query($conn,$query);
}
else
{
	$query= "select * from `subjects` limit 0,8";
	$result= mysqli_query($conn,$query);
}
		
	while($row=mysqli_fetch_assoc($result))
	{		echo '<tr>';
			echo '<td style="width:200px" align="center"> '.$row['subject'].' </td>';
			echo '<td style="width:200px" align="center">'.$row['class'].'</td>';
			echo '<td style="width:100px" align="center"> <a href=updatesubject.php?id='.$row['subid'].'> <span class="glyphicon glyphicon-pencil"> </span> </a> </td>';
			echo '<td style="width:100px" align="center"> <a href=deletesubject.php?id='.$row['subid'].'> <span class="glyphicon glyphicon-remove"> 	</span> </a> </td>';
			echo '</tr>';
	}
	


?>

</table>

<?php
	$num=mysqli_num_rows($result);
	$num=$num/8;
	$num=ceil($num);
	echo '<h4 align="center"> Page: ';
	for($i=2;$i<=$num;$i++)
	{
			echo '<a href=showsubject.php?page='.$i.'>'.$i.'</a> |';
	}
	echo '</h4>';
	
?>
			



</div>


<p> </p>


</div>



<?php
include_once("footer.php");
?>