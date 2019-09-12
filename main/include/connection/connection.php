<?php


$conn = new mysqli('localhost', 'root', '', 'system');

if ($conn->connect_error) {
	die("Database connection failed bro!!!" . $conn->connect_error);
}
?>