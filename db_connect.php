<?php
function getDBConnect($sql)
{
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$db_name = "home";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $db_name);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	return $conn->query($sql);
}
?> 
