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
        <li ><a href="admission.php">New Admission</a></li>
        <li class="active"><a href="showadmission.php"> Show Admissions</a></li> 
         <li> <a href="updateadmission.php"> Update Admissions </a> </li>
         
               </ul>
    </div>
  </div>
</nav>

<div class="hd">
<h4 > SHOW ADMISSIONS </h4>

</div>
<div class="jumbotron" style="height:600px">
<?php
if(isset($_REQUEST['id']) && $_REQUEST['id']!=''){
$query="delete from student_registration where student_id='".$_REQUEST['id']."'";

	if(mysqli_query($conn,$query))
	{
			echo '<h4> STUDENT DETAIL IS DELETED </h4>';
	}
	else
	{
			echo mysqli_error($conn);
	}

}
else
{
		echo '<h4> NO STUDENT DETAIL IS SELECTED TO DELETE </h4>';
}
?>
 </b>
 
 
</div> 

<p> </p>


</div>



<?php
include_once("footer.php");
?>