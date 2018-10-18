<?php  
$dbcon=mysqli_connect("localhost","root","123456");  
mysqli_select_db($dbcon,"uwezodb");  
?>  

<?php
//error_reporting(0);
ob_start();
session_start();


DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', '123456'); 
DEFINE ('DB_HOST', 'localhost'); 
DEFINE ('DB_NAME', 'uwezodb'); 

$conn =  new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
if($conn->connect_error)
die("Failed to connect database ".$conn->connect_error );