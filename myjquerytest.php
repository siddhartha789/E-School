<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="" rel="alternate" type="text/javascript" />
<script src="js/jquery-1.11.3.js"></script>
<script>
//$(document).ready(function(){
function validateme(){
	var x = $('#mybox').val();
	$('#error').html("You Entered "+x);
	$('#mybox').css('border-color','red');
	alert(x);
return false;	
	}
//});
</script>
</head>

<body>
<form action="" method="post" name="frmJ">
<input name="mybox" type="text" id="mybox" size="10" />
<span id="error" style="color:red"></span>
</br>
<input name="chkme" type="submit" onclick="return validateme()" value="Check Me" />
</form>
</body>
</html>