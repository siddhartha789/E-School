
<?php
include_once("header.php");
?>
<script src="js/jquery-1.11.3.js"> </script>
<script>
function admissionvalidate()
{
		
		
	var a=$('#admno').val();
	var b=$('#sname').val();
	var c=$('#fname').val();
	var d=$('#mname').val();
	var e=$('#address').val();
	var f=$('#mobno').val();
	
	if(a=="")
	{
		$('#admnoalert').html("Admission No Is Required");
		$('#admno').css('border-color','#F00');
		
		if(b=="")
		{
				$('#snamealert').html("Student Name Is Required");
				$('#sname').css('border-color','#F00');
				
				if(c=="")
				{
						$('#fnamealert').html("Father's Name Is Required");
						$('#fname').css('border-color','#F00');
						
						if(d=="")
						{
								$('#mnamealert').html("Mother's Name Is Required");
								$('#mname').css('border-color','#F00');
								
								
								
									if(e=="")
									{
											$('#addressalert').html("Address Is Required");
											$('#address').css('border-color','#F00');
											
											if($('#gender:checked').length==0)
											{
				
													$('#genderalert').html("Please Select Gender");
									
											
														if(f=="")
														{
											
														$('#mobnoalert').html("Father's Mobile No Is Required");
														$('#mobno').css('border-color','#F00');
														}
											}
								}
					}
				
		}
		
		}
		
		return false;
		
	}
			
	if(b=="")
		{		
				$('#admnoalert').html("");
				$('#admno').css('border-color','#093');
				$('#snamealert').html("Student Name Is Required");
				$('#sname').css('border-color','#F00');
				
				if(c=="")
				{
						$('#fnamealert').html("Father's Name Is Required");
						$('#fname').css('border-color','#F00');
						
						if(d=="")
						{
								$('#mnamealert').html("Mother's Name Is Required");
								$('#mname').css('border-color','#F00');
								
								
								
									if(e=="")
									{
											$('#addressalert').html("Address Is Required");
											$('#address').css('border-color','#F00');
											
											if($('#gender:checked').length==0)
											{
				
													$('#genderalert').html("Please Select Gender");
									
											
														if(f=="")
														{
											
														$('#mobnoalert').html("Father's Mobile No Is Required");
														$('#mobno').css('border-color','#F00');
														}
											}
								}
					}
				
		}
		return false;
	
		}
		
		
				
				if(c=="")
				{
						$('#admnoalert').html("");
						$('#admno').css('border-color','#093');
						$('#snamealert').html("");
						$('#sname').css('border-color','#093');
						
						
						$('#fnamealert').html("Father's Name Is Required");
						$('#fname').css('border-color','#F00');
						
						if(d=="")
						{
								$('#mnamealert').html("Mother's Name Is Required");
								$('#mname').css('border-color','#F00');
								
								
								
									if(e=="")
									{
											$('#addressalert').html("Address Is Required");
											$('#address').css('border-color','#F00');
											
											if($('#gender:checked').length==0)
											{
				
													$('#genderalert').html("Please Select Gender");
									
											
														if(f=="")
														{
											
														$('#mobnoalert').html("Father's Mobile No Is Required");
														$('#mobno').css('border-color','#F00');
														}
											}
								}
					}
					
					return false;
				
		}
						
						if(d=="")
						{		$('#admnoalert').html("");
								$('#admno').css('border-color','#093');
								$('#snamealert').html("");
								$('#sname').css('border-color','#093');
						
							
								$('#fnamealert').html("");
								$('#fname').css('border-color','#093');
		
								$('#mnamealert').html("Mother's Name Is Required");
								$('#mname').css('border-color','#F00');
								
								
								
									if(e=="")
									{
											$('#addressalert').html("Address Is Required");
											$('#address').css('border-color','#F00');
											
											if($('#gender:checked').length==0)
											{
				
													$('#genderalert').html("Please Select Gender");
									
											
														if(f=="")
														{
											
														$('#mobnoalert').html("Father's Mobile No Is Required");
														$('#mobno').css('border-color','#F00');
														}
											}
								}
								return false;
					}
								
								
								
									if(e=="")
									{		$('#admnoalert').html("");
											$('#admno').css('border-color','#093');
											$('#snamealert').html("");
											$('#sname').css('border-color','#093');
						
							
											$('#fnamealert').html("");
											$('#fname').css('border-color','#093');
		
											$('#mnamealert').html("");
											$('#mname').css('border-color','#093');
					
											$('#addressalert').html("Address Is Required");
											$('#address').css('border-color','#F00');
											
											if($('#gender:checked').length==0)
											{
				
													$('#genderalert').html("Please Select Gender");
									
											
														if(f=="")
														{
											
														$('#mobnoalert').html("Father's Mobile No Is Required");
														$('#mobno').css('border-color','#F00');
														}
											}
											return false;
								}
								
								
											
											if($('#gender:checked').length==0)
											{
													$('#admnoalert').html("");
													$('#admno').css('border-color','#093');
													$('#snamealert').html("");
													$('#sname').css('border-color','#093');
						
									
													$('#fnamealert').html("");
													$('#fname').css('border-color','#093');
				
													$('#mnamealert').html("");
													$('#mname').css('border-color','#093');
							
													$('#addressalert').html("");
													$('#address').css('border-color','#093');
													$('#genderalert').html("Please Select Gender");
									
											
														if(f=="")
														{
											
														$('#mobnoalert').html("Father's Mobile No Is Required");
														$('#mobno').css('border-color','#F00');
														}
														
												return false;
												}
												
														if(f=="")
														{
															
												$('#admnoalert').html("");
													$('#admno').css('border-color','#093');
													$('#snamealert').html("");
													$('#sname').css('border-color','#093');
						
									
													$('#fnamealert').html("");
													$('#fname').css('border-color','#093');
				
													$('#mnamealert').html("");
													$('#mname').css('border-color','#093');
							
													$('#addressalert').html("");
													$('#address').css('border-color','#093');
													$('#genderalert').html("");
									
											
											
														$('#mobnoalert').html("");
														$('#mobno').css('border-color','#093');
														$('#mobnoalert').html("Father's Mobile No Is Required");
														$('#mobno').css('border-color','#F00');
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
        <li class="active"><a href="admission.php">New Admission</a></li>
        <li><a href="showadmission.php"> Show Admissions</a></li> 
         <li> <a href="updateadmission.php"> Update Admissions </a> </li>
         
               </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > NEW ADMISSION </h4>

</div>
<div class="jumbotron" style="height:950px">

<form action="admissionconfirm.php" method="post" name="frmaddmin" onsubmit="return admissionvalidate()">

<table class="table">
<tr >
	<td width="250px" >  <label> Admission No: </label> </td>
    <td> <div class="form-group"> <input type="text" class="form-control" name="admno" placeholder="ADMISSION  NUMBER  " id="admno" /> </td>
    <td> <span id="admnoalert" style="color:red"> </span></td>
	</div>
</tr>
<p> </p>
<tr>
	<td>   <label> Student Name: </label>  </td>
    <td> <div class="form-group"><input type="text" class="form-control" name="studentname" placeholder="STUDENTNAME" id="sname"  />  </td>
	<td> <span id="snamealert" style="color:red"> </span>  </td>
	</div>
</tr>
<p> </p>
<tr>
<td>   <label> Father's Name: </label>  </td>
<td> <div class="form-group">  <input type="text" class="form-control"  name="fathername" placeholder="FATEHR'S NAME" id="fname" /> </td>
<td> <span id="fnamealert" style="color:red"> </span> </td>
</tr>

<p> </p>
<tr>
<td>  <label> Mother's Name: </label> </td>
<td> <input type="text" name="mothername" class="form-control" placeholder="MOTHER'S NAME" id="mname"  /> </td>
<td> <span id="mnamealert" style="color:red"> </span> </td>
</tr>
<p> </p>
<tr>
<td>   <label> Date Of Admission </label> </td>
<td> <?php
 getdatecombo();
?>  </td>
</tr>
<p> </p>
<tr>
<td>  <label> Address </label> </td>

<td><textarea rows="3" cols="20" name="address" class="form-control"  placeholder="ADDRESS" id="address" ></textarea>    </td>
<td> <span id="addressalert" style="color:red"> </span> </td>
</tr>

<tr>
	<td>  <label> Date Of Birth </label>  </td>
    <td><?php
getdateofbirth();
?> </td>
</tr>
<p> </p>
<tr>
<td>  <label> Gender : </label> </td>
<td>  <input type="radio" value="Male" name="Male" id="gender" /> Male
        <input type="radio" value="Female" name="Male" id="gender" /> Female</td>
<td>   <span id="genderalert" style="color:red"> </span> </td>

</tr>
<p> </p>
<tr>
<td> <label> Category: </label> </td>
<td><select name="category"> <option value="GENERAL"> GENERAL </option>
<option value="OBC"> OBC </option>
<option value="SC"> SC </option>
<option value="ST"> ST </option>
</select> </td>
</tr>
<p> </p>
<tr>
<td> <label> Class: </label></td>
<td> <select name="class" style="width:60px">
	<?php
		
		$query="select distinct classname from `class`";
		$result=mysqli_query($conn,$query);
		while($row=mysqli_fetch_assoc($result))
			{	
	
			echo '<option value="' .$row['classname'].'">' .$row['classname'].'</option>';
			}	
	?>
</select>
 </td>
</tr>

<p> </p>
<tr>
<td>  <label> Section : </label>  </td>
<td> <select name="sec" style="width:60px">
	<?php
		
		$query="select distinct sec from `class`";
		$result=mysqli_query($conn,$query);
		while($row=mysqli_fetch_assoc($result))
		{
				
			echo '<option value="' .$row['sec']. '">'.$row['sec'].'</option>';
		}
		
	
	?>

</select>  </td>
</tr>
<p> </p>
<tr>
<td>   <label> Father's Mobile No: </label> </td>
<td><input type="text" name="mobno" class="form-control" placeholder="FATHER'S MOBILE NO" id="mobno" /> </td>
<td> <span id="mobnoalert" style="color:red"> </span> </td>
</tr>

<tr>
<td> <label> Father's Email Address (Optional) </label> </td>
<td> <input type="email" name="email" class="form-control" placeholder="FATHER'S EMAIL" /> </td>
</tr>
</table>







<p> </p>
<div class="col-lg-2">
 
</div>
<div class="col-lg-6">
<button type="submit" class="btn btn-primary" onclick="return validateme(document.frmaddmin)">Submit</button> 

</form>
</div>
</div>
<div class="col-lg-4">
</div>
</div>

<?php
function getdatecombo()
{
	$combo = '<select name="mydate" >';
		$day=1;
		for($a=1;$a<=31;$a++)
		{
			$combo.='<option value="'.$a.'">'. $a.' </option>';
		
		}
	$combo .= '</select>';
	$combo .= '<select name="mymonth">';
		$day=1;
		for($a=1;$a<=12;$a++)
		{
			$combo.='<option value="'.$a.'">'. $a.' </option>';
		
		}
	$combo .= '</select>';
	$combo .= '<select name="myyear">';
		$day=1;
		for($a=1980;$a<=date('Y');$a++)
		{
			$combo.='<option value="'.$a.'">'. $a.' </option>';
		
		}
	$combo .= '</select>';
	
	echo $combo;
	
					
}
function getdateofbirth()
{
	$combo = '<select name="mybirthdate">';
		$day=1;
		for($a=1;$a<=31;$a++)
		{
			$combo.='<option value="'.$a.'">'. $a.' </option>';
		
		}
	$combo .= '</select>';
	$combo .= '<select name="mybirthmonth">';
		$day=1;
		for($a=1;$a<=12;$a++)
		{
			$combo.='<option value="'.$a.'">'. $a.' </option>';
		
		}
	$combo .= '</select>';
	$combo .= '<select name="mybirthyear">';
		$day=1;
		for($a=1980;$a<=date('Y');$a++)
		{
			$combo.='<option value="'.$a.'">'. $a.' </option>';
		
		}
	$combo .= '</select>';
	
	echo $combo;
	
					
}

?>

</div>

<?php
include_once("footer.php");
?>