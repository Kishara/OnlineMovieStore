<?php require_once('connection.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Payment Details</title>
	<link href="../css/payment.css" rel="stylesheet" type="text/css" >
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- viewport- any device-->
	<style>
	#bodystyle{
		background-size: 125%;
	}
</style>
</head>

<body id="bodystyle">

	<div ID = "payments">
		<form action="insert.php" onsubmit="return validateForm()" method="post">
			

			<h2>Payments</h2>





			<div>


				<lable>Your E-mail :</lable><br>
				<input type="email" name="email" class="textInput" placeholder="Enter your Email Address">
			</div><br><br>

			<div>
				<lable>Mode of payment :</lable><br>
				<select name="modepay">
					<option  value = "select">Select</option>
					<option  value = "cash">Cash</option>
					<option  value = "Debit card">Debit Card</option>
					<option  value = "credit card">Credit Card</option>

				</select>
			</div><br><br>


			<div>
				<lable>Your Annual fee is Rs.5000 </lable><br>
			</div><br><br>


			<div>
				<lable>Amount of payment : </lable><br>
				<input type="text" name="payment" class="textInput" placeholder="Enter your payments">
			</div><br><br>

			<div>
				<lable>Credit card number :</lable><br>
				<input type="text" name="cNum" class="textInput" placeholder="Enter your credit card number">
			</div><br><br>



			<div>
				<lable>Debit card number :</lable><br>
				<input type="text" name="dNum" class="textInput" placeholder="Enter your Debit card number">
			</div><br><br>


			<div>
				<lable>Date of payments :</lable><br>
				<input type="date" name="pDate" class="textInput" placeholder="Enter your PayDate" required>
			</div><br><br>


			<div>
				<input type="submit"  value="Submit" class="btn" name="Submit">
			</div>
		</form>


	</div>	



	<script>



		function validateForm() {

			alert("Validation start");
			console.log("Validation start");

			// Payment ID validation 
			var userID = document.forms["myForm"]["uID"].value;
			if (userID == "") {
				alert("Pay ID must be filled out");
			       // return false;
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

		
	</body>
	</html>	


