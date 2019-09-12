<?php
//require_once("subupload.php");
require 'connection.php';

$qry="CREATE TABLE IF NOT EXISTS `upload`(
    `upload_id` int NOT NULL auto_increment, 
	`fname` varchar(50) NOT NULL, 
    `des` varchar(200) NOT NULL,
    `video` varchar(20) NOT NULL,
    `Check_box` varchar(10) NOT NULL,
    PRIMARY KEY(`upload_id`)
)";

$run=mysqli_query($conn,$qry) or die("Cannot create table ".mysqli_error($conn));


$fname=$_POST['fname'];
$des=$_POST['des'];
$video=$_POST['video'];
$cate=$_POST['category'];



//$qry = $sql
//$qry="INSERT INTO `upload` (`upload_id`, `fname`, `des`, `video`, 'Check_box') VALUES(NULL, '$fname','$des','$video', $cate)";

$sql = "INSERT INTO upload(upload_id , fname,des, video , Check_box) values(null , '$fname' , '$des' , '$video' , '$cate')";
$run=mysqli_query($conn,$sql) or die("Data Insertion Failed. ".mysqli_error($conn));

if($run)
    echo "Data Inserted Succeeded. Click Here to go Back.";
	header("Location:../../index.php")
	 
?>
  