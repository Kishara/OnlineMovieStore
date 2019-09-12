<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php 
	// checking if a user is logged in
if (!isset($_SESSION['user_id'])) {
	header('Location: users.php');
}

$errors = array();
$user_id = '';
$first_name = '';
$last_name = '';
$type = '';
$email = '';

if (isset($_GET['user_id'])) {
		// getting the user information
	$user_id = mysqli_real_escape_string($connection, $_GET['user_id']);
	$query = "SELECT * FROM member WHERE id = {$user_id} LIMIT 1";

	$result_set = mysqli_query($connection, $query);

	if ($result_set) {
		if (mysqli_num_rows($result_set) == 1) {
				// user found
			$result = mysqli_fetch_assoc($result_set);
			$first_name = $result['first_name'];
			$last_name = $result['last_name'];
			$type = $result['type'];
			$email = $result['email'];
		} else {
				// user not found
			header('Location: users.php?err=user_not_found');	
		}
	} else {
			// query unsuccessful
		header('Location: users.php?err=query_failed');
	}
}

if (isset($_POST['submit'])) {
	$user_id = $_POST['user_id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$type = $_POST['type'];
	$email = $_POST['email'];

		// checking required fields
		//$req_fields = array('user_id', 'first_name', 'last_name','type', 'email');
		//$errors = array_merge($errors, check_req_fields($req_fields));

		// checking max length
		//$max_len_fields = array('first_name' => 50, 'last_name' =>100, 'email' => 100);
		//$errors = array_merge($errors, check_max_len($max_len_fields));

		// checking email address
		//if (!is_email($_POST['email'])) {
		//	$errors[] = 'Email address is invalid.';
		//}

		// checking if email address already exists
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$query = "SELECT * FROM member WHERE email = '{$email}' AND id != {$user_id} LIMIT 1";

	$result_set = mysqli_query($connection, $query);

	if ($result_set) {
		if (mysqli_num_rows($result_set) == 1) {
			$errors[] = 'Email address already exists';
		}
	}

	if (empty($errors)) {
			// no errors found... adding new record
		$first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
		$last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
			// email address is already sanitized

		$query = "UPDATE member SET ";
		$query .= "first_name = '{$first_name}', ";
		$query .= "last_name = '{$last_name}', ";
		$query .= "type = '{$type}', ";
		$query .= "email = '{$email}' ";
		$query .= "WHERE id = {$user_id} LIMIT 1";

		$result = mysqli_query($connection, $query);

		if ($result) {
				// query successful... redirecting to users page
			header('Location: users.php?users_modified=true');
		} else {
			$errors[] = 'Failed to modify the record.';
		}


	}



}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View / Modify User</title>
	<link rel="stylesheet" href="css/user.css">
</head>
<body style="background:url(img/sign_up.jpg) ; background-repeat: no-repeat; background-size: cover;">
	<header style="background-color: #D4E6F1">
		<div class="appname">Admin</div>
		<div class="loggedin">Welcome <?php echo $_SESSION['first_name']; ?>! <a href="logout.php">Log Out</a></div>
	</header>

	<main>
		<h1>View / Modify User<span> <a href="users.php">< Back to User List</a></span></h1>

		<?php 

		if (!empty($errors)) {
			display_errors($errors);
		}

		?>

		<form action="modify_users.php" method="post" class="userform">
			<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
			<p>
				<label for="">First Name:</label>
				<input type="text" name="first_name" <?php echo 'value="' . $first_name . '"'; ?>>
			</p>

			<p>
				<label for="">Last Name:</label>
				<input type="text" name="last_name" <?php echo 'value="' . $last_name . '"'; ?>>
			</p>

			<p>
				<label for ="">Select</label>
				<select name="type">
					<option>Select any one</option>
					<option value="member">Member</option>
					<option value="advertiser">Advertiser</option>
					<option value="editer">Editer</option>
					
				</select>

			</p></br>

			<p>
				<label for="">Email Address:</label>
				<input type="text" name="email" <?php echo 'value="' . $email . '"'; ?>>
			</p>

			<p>
				<label for="">Password:</label>
				<span>******</span> | <a href="change-password.php">Change Password</a>
			</p>

			<p>
				<label for="">&nbsp;</label>
				<button type="submit" name="submit">Save</button>
			</p>

		</form>

		
		
	</main>
</body>
</html>