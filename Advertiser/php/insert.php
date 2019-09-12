<?php require 'connection.php';

$qry="CREATE TABLE IF NOT EXISTS `advertisment`(
`Ad_id` int NOT NULL auto_increment, 
`Ad_description` varchar(150) NOT NULL,
`Ad_type` varchar(150) NOT NULL,
`Video` varchar(150) NOT NULL,
PRIMARY KEY(`AD_id`)
)";

$run=mysqli_query($conn,$qry) or die("Cannot create table".mysqli_error($conn));

$des=$_POST['Description'];
$type=$_POST['option'];
$video=$_POST['file'];

$qry="INSERT INTO advertisment (`Ad_description`,`Ad_type`,`Video`) VALUES('$des','$type','$video')";
$run=mysqli_query($conn,$qry) or die("Data Insertion Failed. ".mysqli_error($conn));


if($run)
	echo "Data Inserted Succeeded.";
header("Location:advertiser.php");

?>