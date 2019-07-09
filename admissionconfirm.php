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
<div class="jumbotron" style="height:750px">

<div class="col-lg-4">
</div>
<div class="col-lg-4">
<?php
$a= $_POST["admno"];
$b= $_POST["studentname"];
$c= $_POST["fathername"];
$d= $_POST["mothername"];
$e= $_POST["mydate"];
$f= $_POST["mymonth"];
$g= $_POST["myyear"];
$h= $_POST["address"];
$i= $_POST["mybirthdate"];
$j= $_POST["mybirthmonth"];
$k= $_POST["mybirthyear"];
$l= $_POST["Male"];
$m= $_POST["category"];
$n= $_POST["class"];
$o= $_POST["sec"];
$p= $_POST["mobno"];
$q= $_POST["email"];


if($a=="")
{		
		echo "Please Enter Admission No \n";
		if($b=="")
		{
			echo "Please Enter Student Name \n";
			
				if($c=="")
				{
					echo "Please Enter Father's Name \n ";
					
					if($d=="")
					{
							echo "Please Enter Mother's Name \n";
							
							if($e=="")
							{
									echo "Please Enter Address \n";
									
									if(!isset($_POST["Male"]))
									{
											echo "Please Select Gender \n";
									}
							}
					}
				}
		}
		return false;
				
}
	if($b=="")
		{
			echo "Please Enter Student Name \n";
			
				if($c=="")
				{
					echo "Please Enter Father's Name \n ";
					
					if($d=="")
					{
							echo "Please Enter Mother's Name \n";
							
							if($e=="")
							{
									echo "Please Enter Address \n";
									
									if(!isset($_POST["Male"]))
									{
											echo "Please Select Gender \n";
									}
							}
					}
				}
				return false;
		}
		
		if($c=="")
				{
					echo "Please Enter Father's Name \n ";
					
					if($d=="")
					{
							echo "Please Enter Mother's Name \n";
							
							if($e=="")
							{
									echo "Please Enter Address \n";
									
								if(!isset($_POST["Male"]))
									{
											echo "Please Select Gender \n";
									}
							}
					}
					return false;
				}

			if($d=="")
					{
							echo "Please Enter Mother's Name \n";
							
							if($e=="")
							{
									echo "Please Enter Address \n";
									
									if(!isset($_POST["Male"]))
									{
											echo "Please Select Gender \n";
									}
							}
							return false;
					}
					if($e=="")
							{
									echo "Please Enter Address \n";
									
									if(!isset($_POST["Male"]))
									{
											echo "Please Select Gender \n";
									}
									return false;
							}
							
							if(!isset($_POST["Male"]))
									{
											echo "Please Select Gender \n";
									
									return false;
									}
									
		else
		
		{						$query="insert into student_registration set adm_no='" .$a. "',student_name='" .$b. "',father_name='" .$c. "',mother_name='".$d."',date_of_admission='".$e."/".$f."/".$g."',address='" .$h. "',date_of_birth='".$i."/".$j."/".$k."',gender='".$l."',category='".$m."',class='".$n."',sec='".$o."',fmob_no='".$p."',email='" .$q. "'";
								$query2="insert into student_login set id='".$a."',pwd='".$a."'";
								$query3="insert into parent_login set fmob_no='".$p."',pwd='".$p."'";
								if(mysqli_query($conn,$query) && mysqli_query($conn,$query2) && mysqli_query($conn,$query3))
								{
									echo '<h3 style="color:blue"> Student Details Is Saved Successfully </h3>';
									echo '<table class="table table-striped table-bordered table-hover table-condensed">';
										echo '<tr>';
											echo '<td>          </td>';
											echo '<td>  Log-In Id </td>';
											echo '<td> Password </td>';
										echo '</tr>';
										echo '<tr>';
											echo '<td> Student Login </td>';
											echo '<td> '.$a.' </td>';
											echo '<td>'.$a.'</td>';
										echo '</tr>';
										echo '<tr>';
											echo '<td> Parents Login </td>';
											echo '<td>'.$p.'</td>';
											echo '<td>'.$p.'</td>';
										echo '</tr>';
										
										echo '</table>';
								}
									
			
								
								else
								{
										echo mysqli_errno($conn);
										echo '<h3 style="color:red"> This Admission No Is Assigned To Another Student </h3> ';
								}
		}
		
?>
</div>

<div class="col-lg-4">

</div>


</div>
<?php
include_once("footer.php");
?>