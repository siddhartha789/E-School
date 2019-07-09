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
<h4 > VIDEO TUTORIAL </h4>
</div>

<div class="jumbotron" style="height:600px">

<div style="text-align:center">
<form action="svideo.php" method="post">
<label> SELECT CLASS </label>



<select name="class" style="width:80px">
<?php
$query="select distinct class from video_tutorial";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
	echo'<option value='.$row['class'].'>'.$row['class']. '</option>';
}
?>
</select>
</div>
<button type="submit" class="btn-group-justified"> SHOW VIDEOS </button>
</form>
<p> </p>

<table>

	<tr>
    	<td style="width:40px"> S.No </td>
        <td style="width:290px"> SUBJECT </td>
        <td style="width:50px"> VIEW </td>
       </tr>
       <?php
	   		if(isset($_POST['class']))
			{
					$query2="select * from video_tutorial where class='".$_POST['class']."'";
					$result2=mysqli_query($conn,$query2);
					while($row2=mysqli_fetch_assoc($result2))
					{
							echo '<tr>';
							echo '<td>'.$row2['video_id'].'</td>';
							echo '<td>'.$row2['subject'].'</td>';
							echo '<td><a href='.$row2['video_url'].'> VIEW </a></td>';
							echo '</tr>';
							echo '<hr />';
					}
			}
		
		?>
     
      
       </table>
<?php
include_once("footer.php");
?>
