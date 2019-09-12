<!DOCTYPE html>
<html>

<head>
	<title>Advertiser</title>
	<meta charset="utf-8">
	<meta name="author" content="group">
	<meta name="description" content="online movie system">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- viewport- any device-->
	
	<link href="../css/advertiser.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	

</head>
<style>
#abc{
	background:orange;
	color:white;
	padding:10px 10px;
	left:5%;
	position:absolute;
	top:50%;
}

		/*#abd{
				background:orange;
				color:white;
				padding:10px 10px;
				left:5%;
				position:absolute;
				top:60%;
				}*/

				#log{
					width:14%;
					float:right;
					margin-right:5%;
					margin-top: 4%;
					height: 35%;
				}
				
				.al h2{
					color:white;
					font-family: comicsans;

				}

				.al	input{
					color: white;
					width:100px;
					height:40px;
					text-decoration:none;
					background:orange;

				}			
			</style>
			
			<body>
				<div id="header">
					<img src="../images/logo.png" alt="logo" />
					<h1> <center> </center> </h1>
					<ul>
						<li><a href="../../main/index.php">Home</a></li>
						<li class="dropdown">
							<a href="../../main/categories/main/cat.html" class="dropbtn">Categories</a>
							<div class="dropdown-content">
								<a href="../../main/navi_cat/Action.html">Action</a>
								<a href="../../main/navi_cat/Animation.html">Animation</a>
								<a href="../../main/navi_cat/Biography.html">Biography</a>
								<a href="../../main/navi_cat/Cartoon.html">Cartoon</a>
								<a href="../../main/navi_cat/Comedy.html">Comedy</a>
								<a href="../../main/navi_cat/Crime.html">Crime</a>
								<a href="../../main/navi_cat/Documentary.html">Documentary</a>
								<a href="../../main/navi_cat/Drama.html">Drama</a>
								<a href="../../main/navi_cat/Fantasy.html">Fantasy</a>
								<a href="../../main/navi_cat/Horror.html">Horror</a>
								<a href="../../main/navi_cat/Romance.html">Romance</a>
								<a href="../../main/navi_cat/Mystery.html">Mystery</a>
							</div>
						</li>
						<li><a href="../../main/navi_tra/Trailer.html">Trailer</a></li>
						<li><a href="../../main/navi_top/Top_Rating.html">Top Rating</a></li>
						<li><a href="../../main/navi_re/Reviews.html">Reviews</a></li>
						<li><a href="../../main/navi_ab/About_us.html">About us</a></li>
						<li><a href="../../users/login_index.php">Log in</a></li>
						
						
						<div>
							<form class="search-form">
								<input type="text" placeholder="Search">
								<button> Search </button>
							</form>	
						</div>
						
					</ul>
					
				</div>
				<br>		

				<h1 align="center">Advertiser</h1>

				<a href="Advertisment.php"<button id="abc">Upload Advertisment</button></a>


				<div id="log">
					<div class="al">
						<img src="../images/download.png" alt="Advertiser" width="100" height="100"><br>
						<h2>Advertiser</h2>
						<a href="../../users/logout.php"><input type="submit" value="Sign out"></a><br>
					</div>
				</div>



				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
