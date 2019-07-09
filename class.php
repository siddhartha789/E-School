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
        <li class="active"><a href="newclass.php">New Class</a></li>
        <li><a href="showclass.php"> Show Available Classes</a></li> 
         
      </ul>
    </div>
  </div>
</nav>
<div class="hd">
<h4 > NEW CLASS </h4>
</div>

<div class="jumbotron" style="height:300px">

<table class="table">
<div class="form-group">
<form name="frmcls"  action="newclassconfirm.php" onsubmit="return classvalidate()" method="post">
<tr>
	<td>  <label> CLASS: </label> </td>
    <td> <input type="text" class="form-control" name="classname" placeholder="CLASS" id="class" /> </td>
	<td> <span id="classalert" style="color:red"> </span> </td>
    
</tr>

<p> </p>

<tr> 
	<td>  <label> SECTION: </label> </td>
    <td> <input type="text" class="form-control" name="sec" placeholder="SECTION" id="sec"/>  </td>
	<td> <span id="secalert" style="color:red"> </span> </td>
</tr>
<p> </p>
</table>
<input type="submit" class="btn-block" name="submit" value="Submit"    />

</form>
</div>


</div>
</div>
<?php
include_once("footer.php");
?>