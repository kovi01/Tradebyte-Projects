<?php

function connect(){
	$servername = "localhost";
	$username = "admin";
	$password = "dinesh";
	$dbname = "app";


	$conn = new mysqli($servername, $username, $password);
	if($conn->connect_error){
	die("connectionfailed: " . $conn->connect_error);
	}
 
	return $conn;
}

function close_connect($conn){
	mysqli_close($conn);
}

?>
