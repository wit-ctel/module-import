<?php 	
	$servername = "localhost";
	$username = "autoimport_user";
	$password = "trklst123er";
	$dbname = "autoimport";

	//$username = "root";
	//$password = "!conpw2018!";	
	//$dbname = "autoimport";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	   die("Connection failed: " . $conn->connect_error);
	}
	$moduleID = $_GET['moduleid'];

	$sql = "UPDATE modulelist SET importflag='0' WHERE UID=". $moduleID;

	$result = $conn->query($sql);
	echo "1";		
		
	$conn->close();
?>