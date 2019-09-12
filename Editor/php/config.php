<?php
$server="localhost";
$user_name="root";
$password="";
$database="system";

//create connection
$conn= mysqli_connect($server,$user_name,$password,$database);

//check connection
if($conn->connect_error){

	die("Connection Failed : " . $conn->connect_error);
}

?> 