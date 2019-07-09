 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="eschool";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check onnection
if ($conn->connect_error) {
	
die("Connected failed because".$conn->connect_error);
}
?> 