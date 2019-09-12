<!--<?php require_once("connection.php");?>-->
<!DOCTYPE html>
<html>
<head>
	<title>New sign up</title>
	<link href="../css/Advertisment.css" rel="stylesheet" type="text/css" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- viewport- any device-->
	<link href="../css/upload.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="script.js"></script>
	
</head>
<style>

#abc{
	color:grey;
	padding:60px 60px;
	left:55%;
	position:absolute;
	top:110%;
};
</style>
<body style = "background:url(../images/jumanji.jpg) ; background-repeat: no-repeat; background-size: cover;">

	<div id = "Advertiser">
		<form action="insert.php" name="myForm" onsubmit="return validateForm()" method="post">
			
			<h2>Fill this form</h2>
			<div>
				<lable>Ad Type:</lable><br>
				<input type= "radio" name="option" value="Video" ><span>Video</span><br>
				<input type= "radio" name="option" value="Picture"><span>Pic</span><br><br>
			</div>
			<div>
				<lable>Ad Description:</lable><br>
				<input type="text" name="Description" class="textInput" placeholder="Description">
				<div id="email_error" class="val_error"></div>

			</div>
			<?php 
			include_once 'file_uploader.php'; 
			?>

		</form>


	</div>	

	

	<script>

		

		function validateForm() {
			
			alert("Validation start");
			console.log("Validation start");

			// Name validation 
			var nameValue = document.forms["myForm"]["fname"].value;
			if (nameValue == "") {
				alert("Name must be filled out");
				return false;
			}		    


		    // Email validation 
		    var emailValue = document.forms["myForm"]["email"].value;
		    if (emailValue == "") {
		    	alert("Email must be filled out");
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

		
	</body>
	</html>	


