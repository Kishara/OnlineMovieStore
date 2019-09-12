<?php session_start();//sesstion varible eka start kala 
?>
<?php require_once('inc/connection.php'); ?>
<?php
$errors= array();
if(isset($_POST['submit']))
{
				//checking if email address already exists
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$query = "SELECT * FROM member WHERE email = '{$email}' LIMIT 1";
	
	$result_set = mysqli_query($connection, $query);

	if ($result_set){
		if (mysqli_num_rows($result_set) == 1 )
			{	$errors[] = 'Email address already exists <br>';
								//$errors[] = 'You have to use another email ';// display error meessage
	}
}
if(empty($errors)){
					//no errors ---->
	$first_name 	= mysqli_real_escape_string($connection, $_POST['first_name']);
	$last_name 		= mysqli_real_escape_string($connection, $_POST['last_name']);
	$type			= mysqli_real_escape_string($connection, $_POST['type']);
	$password 		= mysqli_real_escape_string($connection, $_POST['password']);
	
	$hashed_password = sha1($password);


	$query = "INSERT INTO member ( ";
	$query .= "first_name, last_name, type, email, password, is_deleted";
	$query .= ") VALUES (";
	$query .= "'{$first_name}', '{$last_name}', '{$type}','{$email}', '{$hashed_password}', 0";
	$query .= ")";

	$result = mysqli_query($connection, $query);

	if(isset($_POST['type'])) {
		if(strcmp($_POST['type'],"member") == 0) {
           													header('Location: ../payment/php/payment.php');	//payment page --member	
           												}
           												else {
           													header('Location: ../payment/php/payment_A.php');//payment page --advertiser		
           												}							 
           											}

							/*if ($result) {
							// query successful... redirecting to users page
							header('Location: users.php?user_added=true');
						} else {
							$errors[] = 'Failed to add the new record.';
						}*/
					}				


				}

				?>


				<!DOCTYPE html>
				<html>
				<head>
					<meta name="author" content="Prasad Rangana">
					<title>Sign Up</title>
					<link rel ="stylesheet" href="css/user.css">
				</head>
				<body style="background:url(img/sign_up.jpg) ; background-repeat: no-repeat; background-size: cover;">
					<header style="background-color: #D4E6F1">
						<div class="appname">New Sign Up</div>
						
					</header>

					<main>

						<h1>Join with us <span> <a href="../main/index.php">Back to the Home</a> </span></h1> 

						<?php
						if (!empty($errors)) {
							echo '<div class= "errmsg">';
							echo '<b>There were error your form!!</b><br>'; 
							foreach ($errors as $error) 
							{
								echo $error . '<br>';
							}

							echo '</div>';
						}
						?>

						<form action="add_user.php" name="myForm" onsubmit="return validateForm()"method="post" class="userform">
							<p>
								<label for ="">First Name:</label>
								<input type="text" name="first_name" >

							</p></br>

							<p>
								<label for ="">Last Name:</label>
								<input type="text" name="last_name" >

							</p></br>

							<p>
								<label for ="">Select</label>
								<select name="type">
									<option>Select any one</option>
									<option value="member">Member</option>
									<option value="advertiser">Advertiser</option>
									
								</select>

							</p></br>

							<p>
								<label for ="">Email Address:</label>
								<input type="text" name="email" >

							</p></br>

							<p>
								<label for ="">Password:</label>
								<input id ="password "type="password" name="password">

							</p></br>

							<p>
								<label for ="">Conform Password:</label>
								<input id ="password_confirmation "type="password" name="password_confirmation" >

							</p></br>


							<p>
								<label for ="">&nbsp;</label>
								<button type="submit" name="submit">Next</button>

							</p></br></br>


						</form>



					</main>


				</body>
				</html>

				<script>
					function validateForm() {
						
						alert("Validation start");
						console.log("Validation start");

		  	 			//First Name validation --- filled out error
		  	 			var passwordValue = document.forms["myForm"]["first_name"].value;
		  	 			if (passwordValue == "") {
		  	 				alert("First Name must be filled out");
		  	 				return false;

		  	 			}


					    //Last Namevalidation --- filled out error
					    var passwordValue = document.forms["myForm"]["last_name"].value;
					    if (passwordValue == "") {
					    	alert("Last Name must be filled out");
					    	return false;
					    }


				  	 	//email validation --- filled out error
				  	 	var passwordValue = document.forms["myForm"]["email"].value;
				  	 	if (passwordValue == "") {
				  	 		alert("Email must be filled out");
				  	 		return false;
				  	 	}

			    		//valid e-mail address error
			    		var x = document.forms["myForm"]["email"].value;
			    		var atpos = x.indexOf("@");
			    		var dotpos = x.lastIndexOf(".");
			    		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
			    			alert("Not a valid e-mail address");
			    			return false;
			    		}	

     			// password validation 
     			var passwordValue = document.forms["myForm"]["password"].value;
     			if (passwordValue == "") {
     				alert("Password must be filled out");
     				return false;
     			}	

			  // check if the two passwords match
			  var password_confirmationValue = document.forms["myForm"]["password_confirmation"].value;
			  if (passwordValue != password_confirmationValue) {
			  	alert("The two passwords do not match");
			  	return false;

			  };
			}	
		</script>

