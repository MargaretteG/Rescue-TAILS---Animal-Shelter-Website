<?php
// Database connection variables
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "midterm";

$db = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$db) 
{
	echo "Connection failed!";
}
?>
