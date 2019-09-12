<?php

require 'connection.php';
?>




<!DOCTYPE html>
<html>
<head>
	<title>upload</title>-
	<link rel="stylesheet" type="text/css" href="up.css">

	<!-- 	link the footer social media icons-->	

	<link rel="stylesheet" href="../css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>
<body>
	<div id = "Upload">

		<form name="myForm" onsubmit="return validateForm()" method="post" action="insert.php">

			<h2>Upload Here</h2>

			<div class="form-group">
				<label><i class="fa fa-upload" aria-hidden="true"></i>Upload Your Files</label>
				<input type="file" name="video" class="form-control">
			</div>

			<div class="form-group">
				<lable>Movie Name : </lable><br>
				<input type="text" name="fname" class="textInput" placeholder="Enter your movie Name" required>
			</div>

			<div class="form-group">
				<lable>Movie Description : </lable><br>
				<input type="text" name="des" class="textInput"placeholder="Enter movie Description">
			</div>

			<div class="form-group" name ="cat">
				<lable><b>Movie Category :</b></lable><br>
				<select name =  "category">
					<option value="select">select</option>
					<option value="Action">Action</option>
					<option value="Animation">Animation</option>
					<option value="Biography">Biography</option>
					<option value="Cartoon">Cartoon</option>
					<option value="Comedy">Comedy</option>
					<option value="Crime">Crime</option>
					<option value="Docuumentary">Documentary</option>
					<option value="Draam">Drama</option>
					<option value="Fantasy">Fantasy</option>
					<option value="Horro">Horror</option>
					<option value="Romance">Romance</option>
				</select>
			</div>

			<div class="form-group">
				<input type="submit" value="upload" name="submit" id="submit">
			</div>
		</div>

		<!--script>

	

		function validateForm() {
		   
		    alert("Validation start");
		    console.log("Validation start");

			 
			var videoValue = document.forms["myForm"]["video"].value;
			    if (videoValue == "") {
			        alert("Video must be browse");
			        return false;
			    }
			}

		

		</script-->
	</body>
	</html>