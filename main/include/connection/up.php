<?php

require 'connection.php';
?>




<!DOCTYPE html>
<html>
<head>
	<title>upload</title>-
	<link rel="stylesheet" type="text/css" href="up.css">
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


			<!--<input type= "checkbox" value="Action" ><span>Action</span><br><br>
			<input type= "checkbox" value="Animation"><span>Animation</span><br><br>
			<input type= "checkbox" value="Biography" ><span>Biography</span><br><br>
			<input type= "checkbox" value="Cartoon"><span>Cartoon</span><br><br>
			<input type= "checkbox" value="Comedy" ><span>Comedy</span><br><br>
			<input type= "checkbox" value="Crime"><span>Crime</span><br><br>
			<input type= "checkbox" value="Documentary" ><span>Documentary</span><br><br>
			<input type= "checkbox" value="Drama"><span>Drama</span><br><br>
			<input type= "checkbox" value="Fantasy"><span>Fantasy</span><br><br>
			<input type= "checkbox" value="Horror"><span>Horror</span><br><br>
			<input type= "checkbox" value="Romance"><span>Romance</span><br><br>-->
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