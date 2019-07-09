<?php
include_once("header.php");
?>
<script src="js/jquery-1.11.3.js"> </script>
<script>
function teachervalidate()
{
	var a=$('#tname').val();
	var b=$('#password').val();
	
	if(a=="")
	{
			$('#tnamealert').html("Teacher's Name is Required" );
			$('#tname').css('border-color','#F00');
			if(b=="")
			{
					$('#passalert').html("Please Enter Password to be assigned");
					$('#password').css('border-color','#F00');
			}
			return false;
	}
			if(b=="")
			{
					$('#tnamealert').html("" );
					$('#tname').css('border-color','#093');
	
					$('#passalert').html("Please Enter Password to be assigned");
					$('#password').css('border-color','#F00');
					
					return false;
			}
			
	
}

</script>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li ><a href="admin.php">Home</a></li>
        <li class="active"><a href="teacher.php">CREATE TEACHER ID</a></li>
        <li><a href="showteacher.php"> SHOW TEACHER'S</a></li> 
         
      </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > CREATE TEACHER ID </h4>
</div>

<div class="jumbotron" style="height:300px">




<form action="teacherconfirm.php" name="teacher" method="post" onsubmit="return teachervalidate()" >
<table class="table">
<div class="form-group">
<tr> 
	<td>  <label> Teacher Name </label>  </td>
    <td> <input type="text" name="tname" class="form-control" placeholder="Teacher Name"  id="tname" />
  </td>
  <td> <span id="tnamealert" style="color:red"> </span> </td>
</tr>
<p> </p>
<tr> 
		<td>  <label> SUBJECT TO BE TEACH </label> </td>
        <td> <select name="subject" style="width:90px" >
        <?php
		$query="select * from subjects";	
		$result=mysqli_query($conn,$query);
		while($row=mysqli_fetch_assoc($result))
		{
		echo'<option value='.$row['subject'].'>'.$row['subject'].  '</option>';
		}
?>
</select>
   </td>
 </tr>
<p> </p>
<tr> 
		<td>  <label> CLASS TEACHER OF CLASS </label> </td>
        <td>   <select name="classteacher">
<option value="NONE"> NONE </option>
<?php
	$query2="select distinct classname from `class`";
	$result2=mysqli_query($conn,$query2);
	while($row2=mysqli_fetch_assoc($result2))
	{
		echo'<option value='.$row2['classname'].'>'.$row2['classname']. '</option>';
	}
?>
</select>
 </td>
</tr>
<p> </p>
<tr>
		<td>  <label> Password To Be Assigned </label>  </td>
        <td>  <input type="password" name="password" class="form-control" placeholder="PASSWORD" id="password" />
  </td>
  	<td> <span id="passalert" style="color:red"> </span> </td>
</tr>
</table>
<input type="submit" class="btn-group-justified" name="save" >
</form>
</div>
<?php

	include_once("footer.php");

?>
