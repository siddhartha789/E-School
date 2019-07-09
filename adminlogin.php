<?php
session_start();
include_once('db_connect.php');

if(isset($_REQUEST['adminid']) && isset($_REQUEST['adminpassword']))
{
$u = $_REQUEST['adminid'];
$p = $_REQUEST['adminpassword'];

$sql = "select * from admin_login where admin_username = '".$u."' and password = '".$p."'";

$res = mysqli_query($conn,$sql);$num = mysqli_num_rows($res);
if($num==1){
	
	$_SESSION['isadmin'] = 'YeS';

	header('Location:admin.php');


		exit;

	}else{
		
	header('Location:index.html');
			exit;

		}
}
if(isset($_REQUEST['teacherid']) && isset($_REQUEST['teacherpassword']))
{
	$a= $_REQUEST['teacherid'];
	$b= $_REQUEST['teacherpassword'];
	
	$query="select * from teacher_login where teacher_id='".$a."' and pwd='".$b."'";
	$result=mysqli_query($conn,$query);
	
	$num=mysqli_num_rows($result);
	
	if($num==1)
	{
			$_SESSION['teacher']="yes";
			header('Location:teacherhome.php');
			exit;
	}
	else
	{
			header('Location:index.html');
			exit;
	}


	
}
if(isset($_REQUEST['studentid']) && isset($_REQUEST['studentpassword']))
{
		$c= $_REQUEST['studentid'];
		$d= $_REQUEST['studentpassword'];
		$query2= "select * from student_login where id='".$c."' and pwd='".$d."'";
		$result2=mysqli_query($conn,$query2);
		$row=mysqli_fetch_assoc($result2);
		$num=mysqli_num_rows($result2);
		
		if($num>0)
		{
				$query3="select * from student_registration where adm_no='".$row['id']."'";
				$result3=mysqli_query($conn,$query3);
				$row2=mysqli_fetch_assoc($result3);
				$_SESSION['name']=$row2['student_name'];
				$_SESSION['admno']=$row2['adm_no'];
				$_SESSION['student']="yes";
				header('Location:studenthome.php');
				exit;
		}
		else
		{
				header('Location:index.html');
				exit;
		}
}
if(isset($_REQUEST['parentid']) && isset($_REQUEST['parentspassword']))
{
		$e= $_REQUEST['parentid'];
		$f= $_REQUEST['parentspassword'];
		$query4="select * from student_registration where fmob_no='".$e."'";
		$result4=mysqli_query($conn,$query4);
		$num=mysqli_num_rows($result4);
		
		if($num==1 || $num>1)
		{		$query5="select distinct father_name from student_registration where fmob_no='".$e."'";
				$result5=mysqli_query($conn,$query5);
				$row5=mysqli_fetch_assoc($result5);	
				$_SESSION['parents']="yes";
				$_SESSION['mobno']=$e;
				$_SESSION['name']=$row5['father_name'];
				header('Location:parentshome.php');
				exit;
		}
		else
		{
				header('Location:index.html');
		}
}
?>