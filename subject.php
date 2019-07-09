<?php
include_once("header.php");
?>
<script src="js/jquery-1.11.3.js"> </script>
<script>
function subjectvalidate()
{
	var a=$("#subject");
	if(a=="")
	{
			$("#subjecttest").html("Please Enter Subject Name");
			$("#subject").css('border-color','red');
			return false;
	}
	return true;
	
	
}
</script>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li ><a href="admin.php">Home</a></li>
        <li class="active"><a href="subject.php">NEW SUBJECT</a></li>
        <li ><a href="showsubject.php"> Show Subjects</a></li> 
         
         
               </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > CREATE SUBJECT </h4>

</div>
<div class="jumbotron" style="height:600px">

<form action="subjectconfirm.php" method="post">
<div style="text-align:center">
<table class="table">
<tr>
<td>
<label> SELECT CLASS </label>
</td>
<td>
<select name="class" value="class" style="width:60px" >
<div class="form-group">
<?php
$query="select distinct classname from `class`";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
			echo '<option value=' .$row['classname'].'>' .$row['classname'].'</option>';
		
	}


?>
</select>
</td>

<td>
<p> </p>
</td>
<td>
<p> </p>
</td>
<td>
<p> </p>
</td>
</tr>
<tr>
<td>
<label> SUBJECT </label>
</td>
<td>
<input type="text" name="subject" placeholder="Enter Subject Name" class="form-control" id="subject" />
<span id="subjecttest" style="color:red"> </span>
</td>

<td>
</td>

<td>
</td>
</tr>
</table>
<input type="submit" class="btn-group-justified" onclick="return subjectvalidate()"   value="SAVE">  </button>
</form>
</div>


<p> </p>


</div>



<?php
include_once("footer.php");
?>