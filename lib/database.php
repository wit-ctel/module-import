<?php 
$servername = "localhost";
	$username = "autoimport_user";
	$password = "trklst123er";
	$dbname = "autoimport";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>