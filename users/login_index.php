<?php session_start();//sesstion varible eka start kala 
?>
<?php require_once('inc/connection.php'); ?>
<?php

	// check for form submint
if (isset($_POST['submit'])) 
{
			# code...
	$errors = array();

			//check if the username and password has been entered
	if(!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 ){
		$errors[] = 'Email is Missing or Invalid !!';
	}

	if(!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 ){
		$errors[] = 'Password is Missing or Invalid !!';
	}	
	
						// check if there are any error
	if(empty($errors)) {
								// save username and password 
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$password = mysqli_real_escape_string($connection, $_POST['password']);
		$hashed_password = sha1($password);

								// prepare database query
		$query = "SELECT * FROM member
		WHERE email = '{$email}'
		AND password = '{$hashed_password}'
		LIMIT 1";


		$result_set = mysqli_query($connection, $query);
		if ($result_set) {


													// succesful
			if (mysqli_num_rows($result_set) == 1) {
														// vailed user found
				$user = mysqli_fetch_assoc($result_set);
				$_SESSION['user_id'] = $user['id'];
														$_SESSION['first_name'] = $user['first_name'];//display name coner



															/*
														$email=$_POST['email'];
														$password=$_POST['password'];
														$admin="admin";
														$editor="editor";
														$advertiser="advertiser";
														$member=["member"];*/

			/*$query_admin="SELECT * FROM users WHERE email='{$email}' AND password='{$password}' AND type='{$admin}'";
			$run_admin=mysql_query($query_admin);
			
			$query_editor="SELECT * FROM users  WHERE email='{$email}' AND password='{$password}' AND type='{$editor}'";
			$run_editor=mysql_query($query_editor);

			$query_advertiser="SELECT * FROM users  WHERE email='{$email}' AND password='{$password}' AND type='{$advertiser}'";
			$run_advertiser=mysql_query($query_advertiser);

			$query_member="SELECT * FROM users  WHERE email='{$email}' AND password='{$password}' AND type='{$member}'";
			$run_member=mysql_query($query_member);

			if (mysql_query($run_admin==1)) {

				header('Location:users.php');
			}*/





														//updateing last login
			$query = "UPDATE member set last_login = NOW()";
			$query.= "WHERE id = {$_SESSION['user_id']} LIMIT 1 ";


			$result_set = mysqli_query($connection, $query);

			if(!$result_set){
				die("Database query failed!!");
			}

			



														// redirect to users.php
			header('Location:../../final/main/index.html');

			header('Location:users.php');

		}
		
		else{
														// user and password invailed
			$errors[] = 'Invalid Username and Password';
		}
	}
	else{
		$errors[] = 'Database query failed';
												// if not,display the error
	}			

}


}
?>



<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="Prasad Rangana">
	<title>Log in</title>
	<link rel="stylesheet"  href="css/login.css">
</head>

<body style="background:url(img/login_bg_img.jpg) ; background-repeat: no-repeat; background-size: cover;">
	<div class="login">

		<form action="login_index.php" method="post">

			<fieldset>
				<legend> <h1>Log In</h1> </legend>

				<?php
				if (isset($errors) && !empty($errors))
					{	echo '<p class="error">Invalid Username or Password</p>';

			}
			?>

			<?php
			if (isset($_GET['logout'])){
				echo '<p class="info">You have succesffully logged out </p>';
			}

			?>
			<p>
				<label for="">Username</label>
				<input type="text" name="email" id="" placeholder="Email Address">
			</p>

			<p>
				<label for="">Password</label>
				<input type="password" name="password" id="" placeholder="Password">
			</p>

			<p>
				<button type="submit" name="submit">Log In</button>
			</p>	


			<p>
				<center><span> <a href="add_user.php">Sign up with us</a> </span></center>
			</p>

		</fieldset>
		
	</form>
	
</div>

</body>
</html>

<?php mysqli_close($connection); ?>