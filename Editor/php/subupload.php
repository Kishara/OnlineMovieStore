<?php //Linking the configuration file
require 'config.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title>Reviews</title>
	<meta charset="utf-8">
	<meta name="author" content="group">
	<meta name="description" content="online movie system">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- viewport- any device-->
	
	<link href="../css/subupload.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="../css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body style = "background:url(../images/back1.jpg) ; background-repeat: no-repeat; background-size: cover;">
	<body>
		<div id="header">
			<img src="../images/logo.png" alt="logo" />
			<h1> <center></center> </h1>
			<ul>
				<li><a href="../index.html">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropbtn">Categories</a>
					<div class="dropdown-content">
						<a href="../navi_cat/Action.html">Action</a>
						<a href="../navi_cat/Animation.html">Animation</a>
						<a href="../navi_cat/Biography.html">Biography</a>
						<a href="../navi_cat/Cartoon.html">Cartoon</a>
						<a href="../navi_cat/Comedy.html">Comedy</a>
						<a href="../navi_cat/Crime.html">Crime</a>
						<a href="../navi_cat/Documentary.html">Documentary</a>
						<a href="../navi_cat/Drama.html">Drama</a>
						<a href="../navi_cat/Fantasy.html">Fantasy</a>
						<a href="../navi_cat/Horror.html">Horror</a>
						<a href="../navi_cat/Romance.html">Romance</a>
						
					</div>
				</li>
				<li><a href="../navi_tra/Trailer.html">Trailer</a></li>
				<li><a href="../navi_top/Top_Rating.html">Top Rating</a></li>
				<li><a href="#">Reviews</a></li>
				<li><a href="../navi_ab/About_us.html">About us</a></li>
				<li><a href="../navi_log/Log_in.html">Log in</a></li>
				
				<div>
					<form class="search-form">
						<input type="text" placeholder="Search">
						<button> Search </button>
					</form>	
				</div>
				
			</ul>
			
		</div>
	</br>
	<center>
		<div class="rev">
			<div>
				<img src="../images/user2.png" width="90" height="80" alt="user">
			</div>
			<div class="combox">
				<form action="insertion.php" method="POST"  onsubmit = "formvalid()">
					<label>Moviename : </label><input type="text" name="name" placeholder="Sub_id" id = "name"><br/><br/>
					<label>Subtitle language : </label><input type="text" name="lan" placeholder="Sub_language" id = "name"><br/><br/>
					<label>Uploader : </label><input type="text" name="upname" placeholder="Username" id = "Uploader_id"><br/><br/>
					<br/>
					<br/>
					<center>
						<p>Subtitle description</p>
						<input type = "text" rows="6" name="comment">
					</center>
					<br/><br/><br/>
					<a href="subtitle_upload.php"><input style = "float: right;"  type="submit" value = "submit" name = "sub"></a>
					<br/>
					<br/>
				</form>
			</div>
		</div>
	</center>
	
	
	
	

	<div class="footer">
		
	</div>

	<footer class="footer-distributed">

		<div class="footer-left">

			<h3>Popcorn<span>Theater</span></h3>

			<p class="footer-links">
				<a href="#">Home | </a>
				
				<a href="#">About us | </a>
				
				<a href="#">Contact</a>
			</p>

			<p class="footer-company-name">Popcorn Theater &copy; 2018</p>
		</div>

		<div class="footer-center">

			<div>
				<i class="fa fa-map-marker"></i>
				<p><span>SLIIT,</span>New Kandy Road, Malabe</p>
			</div>

			<div>
				<i class="fa fa-phone"></i>
				<p>+94123456789</p>
			</div>

			<div>
				<i class="fa fa-envelope"></i>
				<p><a href="popcorntheater@gmail.com">popcorntheater@gmail.com</a></p>
			</div>

		</div>

		<div class="footer-right">

			<p class="footer-company-about">
				<span>About the company</span>
			We love movies! Popcorn Theater was created for people like us who want to watch "Great Movies. Free." .</p>

			<div class="footer-icons">

				<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
				<a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
				<a href="https://github.com"><i class="fa fa-github"></i></a>

			</div>

		</div>

	</footer>
	
</body>
</html>
