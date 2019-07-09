<?php
include_once("header.php");

?>

<?php
	if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
	{
		$query="delete from teacher_login where teacher_id='".$_REQUEST['id']."'";
		if(mysqli_query($conn,$query))
		{
				header('Location:showteacher.php');
		}
		else
		{
				header('Location:showteacher.php');
		}
	}
	else
	{
			header('Location:showteacher.php');
	}
?>