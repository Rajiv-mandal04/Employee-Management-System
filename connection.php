<?php 

error_reporting(0); 
mysqli_report(MYSQLI_REPORT_OFF);

$servername = "localhost:3309";
$username   = "root";
$password   = "";
$dbname     = "employee"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
   // echo "✅ Connection ok ";
} else {
    echo "❌ Connection failed";
}

?>
