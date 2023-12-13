<?php
	
$servername = "localhost";
$username = "root";
$password = "";
$db = "project";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optionally, you can set the character set to utf8 for better compatibility
$conn->set_charset("utf8");
