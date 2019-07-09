<?php
	include_once("header.php");
?>
<?php
	if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
	{
		$query2="select * from student_timetable where id='".$_REQUEST['id']."'";
	 	$result= mysqli_query($conn,$query2);
	 	$row= mysqli_fetch_assoc($result);
		$query="delete from student_timetable where id='".$_REQUEST['id']."'";
		if(mysqli_query($conn,$query))
		{
				
	 
			 if(mysqli_query($conn,$query))
	 		{
		 		header('Location:showtt.php?class='.$row['class']);
	 			exit;
	 		}
		}
		else
		{
				echo mysqli_error($conn);
		}
		
		
	}
	else
	{
			echo mysqli_error($conn);
	}
	

?>