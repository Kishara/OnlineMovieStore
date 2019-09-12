<?php

// configaration objects
$conn = new mysqli('localhost', 'root', '', 'system');

if ($conn->connect_error) {
	die("Database connection failed!!!" . $conn->connect_error);
}
?>