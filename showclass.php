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
        <li ><a href="class.php">New Class</a></li>
        <li class="active"><a href="showclass.php"> Show Available Classes</a></li> 
         
      </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > SHOW CLASS AND SECTION </h4>
</div>
<div class="jumbotron" style="height:auto">
<table class="table table-striped table-bordered table-hover table-condensed" align="center">
<tr>
	<td style="width:200px"> SNO </td>
    <td style="width:200px"> CLASS </td>
    <td style="width:200px"> SECTION </td>
</tr>

	<?php
	$query="select * from `class`";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{		echo '<tr> ';
			echo '<td> '.$row['id'].' </td>';
			echo '<td> '.$row['classname'].'</td>';
			echo '<td> '.$row['sec'].'</td>';
			echo '</tr>';
	}
	
	?>
</table>
</div>
</div>

<?php
include_once("footer.php");
?>