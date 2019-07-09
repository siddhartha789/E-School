
<?php
include_once("headerp.php");
?>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    
     </div>
    <h4 style="text-align:right;color:#CCC;margin-right:30px;margin-top:15px"> Hello <?php echo $_SESSION['name']; ?>  | <a href="logoutp.php">  <span style="color:#FFF" class="glyphicon glyphicon-off"> LOGOUT </span> </a> </h4>
     
     </h4>
     </nav>

 <div class="col-lg-4">
 <a href="pstudenttimetable.php"> <img src="png/appointment1.png" width="304" height="236" /> <br /> CLASS TIME TABLE </a>
</div>

<div class="col-lg-4">
<p>  </p>
<a href="pfees.php"> <img src="png/money132.png" width="304" height="236" /> <br /> FEES STATUS</a>
</div>


<div class="col-lg-4">
<a href="pstudentattendance.php"> <img src="png/verification25.png"  width="304" height="230"/> <br /> STUDENT ATTENDANCE ENQUIRY </a>
</div>


<?php
include_once("footer.php");
?>



