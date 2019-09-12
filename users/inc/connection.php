<?php 
	//		<meta name="author" content="Prasad Rangana">
	// $connection = mysql_connect(dbserver,dbuser,dbpass,dbname);
 
 	$connection = mysqli_connect('localhost','root', '', 'system'); // users DB eke memberDB ekai advertiserDB include

 	//mysql_connect_error();

 	// check errors

 	if (mysqli_connect_errno()) {
 							die('Database connection failed bro!!' . mysqli_connect_errno());
 							}

 	//else {
 	//		echo "Machan connection successful ***** ";
	 //	}


 	/*if (isset($_POST['submit'])) {
 								$email=$_POST['email'];
 								$password=$_POST['password'];
 								$query=mysqli_query($connection,"SELECT * FROM users WHERE email='$email' AND password='$password'");

 								$row=mysqli_fetch_array($query);
 								$type=$row['type'];

 								$isexist=mysqli_query($connection,"SELECT * FROM users WHERE email='$email' AND password='$password'");

 								$check_user=mysqli_num_rows($isexist);

 								if ($check_user==1) {
 									$_SESSION["type"] = $row['type'];
 									$_SESSION["email"] = $row['email'];

 										if ($type=="advertiser") {
 											echo "<script>window.open('advertiser_page.php', '_self')</script>";
 											# code...
 										}
 										else{
 											echo "member";
 										}

 									}
 								}*/

 							
 												
?>