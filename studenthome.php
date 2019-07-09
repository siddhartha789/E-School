<?php
include_once("headers.php");
?>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    
     </div>
     
     
    <h4 style="text-align:right;color:#CCC"> Welcome <?php echo $_SESSION['name']; ?> | <a href="logouts.php">  <span style="color:#FFF" class="glyphicon glyphicon-off"> LOGOUT </span> </a></h4> </h4>
     
     
     </nav>
 

<div class="col-lg-3">


 <a href="stimetable.php"> <img src="png/appointment1.png"  width="236" height="200px"/>  <br />CLASS TIME TABLE </a>
 
 
 </div>
 
 <div class="col-lg-3">
 <a href="sfeesstatus.php"> <img src="png/money132.png"  width="236" height="200px" /> <br /> FEES STATUS </a>
 </div>
 <div class="col-lg-3">
 <a href="sassignment.php"> <img src="png/verification5.png" width="236" height="200px"/>  <br /> ASSIGNMENTS</a>
 </div>
 <div class="col-lg-3">
 <a href="svideo.php"> <img src="png/videoplayer5.png" width="236" height="200px" /> <br /> VIDEO TUTORIALS </a>
 </div>
 
 
 

<?php
include_once("footer.php");
?>