<?php
	include_once("header.php");
?>

<?php

	if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
	{
			$query="delete from subjects where subid='".$_REQUEST['id']."'";
			if(mysqli_query($conn,$query))
			{
					header('Location:showsubject.php');
			}
			else
			{
					header('Location:showsubject.php');
			}
	}
	else
	{
			header('Location:showsubject.php');
	}
?>