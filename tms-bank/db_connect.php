<?php
$servername = "remotemysql.com";
$username = "JkmXIRzGBO";
$password = "wwCZZCWAmR";
$database = "JkmXIRzGBO";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
	header('location:server_down.php');
} 
else{
	// echo "Connection Established";
}

?>