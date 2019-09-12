<?php require 'config.php';

$qry="CREATE TABLE IF NOT EXISTS `subtitle`(
`sub_id` int NOT NULL auto_increment, 
`sub_language` varchar(150) NOT NULL,
`uploader_id` varchar(150) NOT NULL,
`sub-des` varchar(150) NOT NULL,
PRIMARY KEY(`sub_id`)
)";

$run=mysqli_query($conn,$qry) or die("Cannot create table".mysqli_error($conn));

$subLan = $_POST['lan'];
$uploader = $_POST['upname'];
$comm = $_POST['comment'];
$sub = $_POST['subti'];

$qry = "INSERT INTO subtitle (`sub_language`,`uploader_id`,`sub-des`) VALUES('$subLan','$uploader','$comm')";
$run=mysqli_query($conn,$qry) or die("Data Insertion Failed. ".mysqli_error($conn));

if($run)
     echo "Data Inserted Succeeded.";
 header("Location:subtitle_upload.php");


?>