<?php require_once("connection.php");

$qry="CREATE TABLE IF NOT EXISTS `payment`(
`pay_id` int NOT NULL auto_increment, 
`email` varchar(200), 
`mode_pay` varchar(200),
`payments` int,
`debit_num` int,
`credit_num` int,
`pay_date` date,
PRIMARY KEY(`pay_id`)
)";
$run=mysqli_query($conn,$qry) or die("Cannot create table ".mysqli_error($conn));

$email=$_POST['email'];
$mode_pay=$_POST['modepay'];
$payment=$_POST['payment'];
$debit_num=$_POST['dNum'];
$credit_num=$_POST['cNum'];
$pay_date = $_POST['pDate'];

$qry="INSERT INTO `payment` (`email`,`mode_pay`,`payments`,`debit_num`, `credit_num`, `pay_date`) VALUES('$email','$mode_pay','$payment','$debit_num','$credit_num', '$pay_date')";
$run=mysqli_query($conn,$qry) or die("Data Insertion Failed. ".mysqli_error($conn));


if($run)
    echo "Data Inserted Succeeded. Click Here to go Back.";
header("Location:../../main/index.php");



?>
