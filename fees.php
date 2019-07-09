<?php
include_once("header.php");
?>
<script src="js/jquery-1.11.3.js"> </script>
<script>
function feesvalidate()
{
	var a=$('#sname').val();
	var b=$('#fname').val();
	var c=$('#amount').val();
	
	if(a=="")
	{
			$('#snamealert').html("Student Name Is Required");
			$('#sname').css('border-color','#F00');
			if(b=="")
			{
					$('#fnamealert').html("Father's Name is Required");
					$('#fname').css('border-color','#F00');
					if(c=="")
					{
							$('#amountalert').html("Amount Must Be Entered");
							$('#amount').css('border-color','#F00');
					}
			}
			return false;
	}
			if(b=="")
			{
					$('#snamealert').html("");
					$('#sname').css('border-color','#093');
	
					$('#fnamealert').html("Father's Name is Required");
					$('#fname').css('border-color','#F00');
					if(c=="")
					{
							$('#amountalert').html("Amount Must Be Entered");
							$('#amount').css('border-color','#F00');
					}
					return false;
			}
					if(c=="")
					{	$('#snamealert').html("");
						$('#sname').css('border-color','#093');
	
						$('#fnamealert').html("");
						$('#fname').css('border-color','#093');
			
							$('#amountalert').html("Amount Must Be Entered");
							$('#amount').css('border-color','#F00');
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
        <li class="active"><a href="fees.php">SUBMIT FEES</a></li>
        <li><a href="showfees.php"> SHOW FEES STATUS</a></li> 
        <li> <a href="pendingfees.php"> PENDING FEES </a> </li>
         
      </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > SUBMIT FEES </h4>
</div>

<div class="jumbotron" style="height:350px">
<script>
function submitme(val){
	window.location.href = '?adno='+val;
	
		
	
	}
</script>
<?php
if(isset($_REQUEST['adno']) && $_REQUEST['adno']!=''){
	 $selStd = "select * from student_registration where adm_no = ".$_REQUEST['adno'];
	 $resStd = mysqli_query($conn,$selStd);
	 $detailStd = mysqli_fetch_assoc($resStd);
	
	}
	else
	{
			$detailStd['student_name']="";
			$detailStd['father_name']="";
			$detailStd['adm_no']="Please Select";
	}
	

?>

<form action="feesconfirm.php" name="fees" method="post"  onsubmit="return feesvalidate()">
<div class="form-group">
<table class="table">
<tr>
	<td>  <label> Student Id: </label> </td>
    <td> 
<select name="sid" id="sid"  style="width:70px" onchange="submitme(this.value)" >
<?php
echo '<option value='.$detailStd['adm_no'].'>' .$detailStd['adm_no'].'</option>';
?>
<?php
$query="select * from student_registration";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
	echo'<option value='.$row['adm_no'].'>'.$row['adm_no']. '</option>';
}
?>
</select>
 </td>
</tr>
<p> </p>

<tr>
		<td>   <label> Student Name: </label>  </td>
        <td> <input type="text" name="sname"  placeholder="Student Name" class="form-control" value="<?php echo $detailStd['student_name']?>" id="sname" /> </td>
        <td> <span id="snamealert" style="color:red"> </span> </td>
  
</tr>
<p> </p>
<tr>
		<td>   <label> Father's Name: </label> </td>
        <td> <input type="text" name="fname" placeholder="Father's Name" id="fname" class="form-control" value="<?php echo $detailStd['father_name']?> " />
 </td>
 	<td> <span id="fnamealert" style="color:red"> </span> </td>
</tr>
<p> </p>
<tr>
	<td>  <label> Fees Amount </label> </td>
    <td>  <input type="number" name="amount" placeholder="AMOUNT" id="amount" class="form-control" />
 </td>
 <td> <span id="amountalert" style="color:red"> </span></td>
</tr>
<p> </p>
<tr>
	<td> <label> Month: </label> </td>
    <td> <select name="month">
<option value="JAN"> JANUARY </option>
<option value="FEB"> FEBRUARY </option>
<option value="MAR"> MAR </option>
<option value="APR"> APRIL </option>
<option value="MAY"> MAY </option>
<option value="JUN"> JUNE </option>
<option value="JULY"> JULY </option>
<option value="AUG"> AUGUST </option>
<option value="SEP"> SEPTEMBER </option>
<option value="OCT"> OCTOBER </option>
<option value="NOV"> NOVEMBER </option>
<option value="DEC"> DECEMBER </option>
 </select>
 </td>
</tr>
</table>

 <input type="submit" class="btn-group-justified"  /> 
 </div>
 </div>
 </form>
 <?php
 include_once("footer.php");
 ?>

