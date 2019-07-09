<?php
	include_once("headert.php");
?>
<html>
<head>
	<title> Demo </title>
    
	</head>
 
<body>
<form action="assignmentconfirm.php" method="post"  enctype="multipart/form-data">
	<label> Class: </label>
<select name="class" style="width:50px">
<?php
$query="select distinct class from student_registration";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
	
	echo '<option value='.$row['class'].'>'.$row['class']. '</option>';
}
?>
</select>

	 <label> Title Of Assignment </label> </td>
	<input type="text" name="title" placeholder="TITLE" id="title"/> </td>
     <span id="titlealert" style="color:red"> </span> </td>
	<label > Browse Your File </label> </td>
	<td style="text-align:center"><input type="file" name="assignmentupload" id="assignmentupload" /></td>
    
    
 
<button type="submit" class="btn-group-justified"> UPLOAD AND SAVE </button>


</form>

</body>

</html>