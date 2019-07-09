<?php
include_once("headert.php");
?>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li ><a href="teacherhome.php">Home</a></li>
        
               </ul>
    </div>
  </div>
</nav>
<script>
	function response(val)
	{
			window.location.href='?id='+val;
	}
</script>
<div class="hd">
<h4>  SHOW TEACHER TIME-TABLE </h4>
</div>
<div class="jumbotron" style="height:520px">
<div style="text-align:center">
<label> TEACHER ID: </label>
<select name="teacherid" style="width:80px" onchange="response(this.value)">
<option value="select One"> SELECT TEACHER NAME </option>
<?php
	$query2=mysqli_query($conn,"select * from teacher_login");
	while($row2=mysqli_fetch_array($query2))
	{
			echo '<option value='.$row2['teacher_id'].'>'.$row2['teacher_name'].'</option>';
	}
	
?>	

</select>
<p> </p>

</div> 

<table class="table table-striped table-bordered table-hover table-condensed">

	<tr> 
    	<td> MONDAY </td>
        <td> Class & Time-> </td>
        <?php
			if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
			{
			$query="select * from student_timetable where monday=(select subject from teacher_login where teacher_id='".$_REQUEST['id']."')";
			$result=mysqli_query($conn,$query);
			
			while($row=mysqli_fetch_array($result))
			{
					echo '<td> Class:'.$row['class'].'|Time:'.$row['time'].'</td>';
			}
			}
			
    
    	?>
    
     </tr>
     <tr> 
    	<td> TUESDAY </td>
        <td> Class & Time-> </td>
        <?php
			if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
			{
			$query="select * from student_timetable where tuesday=(select subject from teacher_login where teacher_id='".$_REQUEST['id']."')";
			$result=mysqli_query($conn,$query);
			
			while($row=mysqli_fetch_array($result))
			{
					echo '<td> Class:'.$row['class'].'|Time:'.$row['time'].'</td>';
			}
			}
			
    
    	?>
    
     </tr>
     <tr> 
    	<td> MONDAY </td>
        <td> Class & Time-> </td>
        <?php
			if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
			{
			$query="select * from student_timetable where wednesday=(select subject from teacher_login where teacher_id='".$_REQUEST['id']."')";
			$result=mysqli_query($conn,$query);
			
			while($row=mysqli_fetch_array($result))
			{
					echo '<td> Class:'.$row['class'].'|Time:'.$row['time'].'</td>';
			}
			}
			
    
    	?>
    
     </tr>
     <tr> 
    	<td> MONDAY </td>
        <td> Class & Time-> </td>
        <?php
			if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
			{
			$query="select * from student_timetable where thursday=(select subject from teacher_login where teacher_id='".$_REQUEST['id']."')";
			$result=mysqli_query($conn,$query);
			
			while($row=mysqli_fetch_array($result))
			{
					echo '<td> Class:'.$row['class'].'|Time:'.$row['time'].'</td>';
			}
			}
			
    
    	?>
    
     </tr>
     <tr> 
    	<td> MONDAY </td>
        <td> Class & Time-> </td>
        <?php
			if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
			{
			$query="select * from student_timetable where friday=(select subject from teacher_login where teacher_id='".$_REQUEST['id']."')";
			$result=mysqli_query($conn,$query);
			
			while($row=mysqli_fetch_array($result))
			{
					echo '<td> Class:'.$row['class'].'|Time:'.$row['time'].'</td>';
			}
			}
			
    
    	?>
    
     </tr>
     <tr> 
    	<td> MONDAY </td>
        <td> Class & Time-> </td>
        <?php
			if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
			{
			$query="select * from student_timetable where saturday=(select subject from teacher_login where teacher_id='".$_REQUEST['id']."')";
			$result=mysqli_query($conn,$query);
			
			while($row=mysqli_fetch_array($result))
			{
					echo '<td> Class:'.$row['class'].'|Time:'.$row['time'].'</td>';
			}
			}
			
    
    	?>
    
     </tr>
     
    
    </table>



<?php
include_once("footer.php");
?>