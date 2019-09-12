<?php  

include 'header.php';

?>
<style>

.zoom {
	width:100%;
	padding: 10px;
}

.zoom {
	width:18%;
	float: left;
	margin-left: 1.5%;
	padding: 0,0,0,0;
	transition: 1s;
}

.zoom img{
	width: 100%;
	max-width: 100%;
	border-radius:5%;
}

.zoom img:hover
{
	transform: scale(0.9);
	transition: all 800ms;
}

.namefilm:hover
{
	transform: scale(0.9);
	transition: all 800ms;
}

.namefilm{
	font-size: 1em;
	font-family:Prestige Elite Std;
	margin: 0 0 0 0 ;
	font-weight: bold;
	color: white ;
	text-align: center;

}
</style>
<body>
	<div id="header">
		<a href="#">
			<img src="images/logo.png" alt="logo" /></a>
			<h1> <center> </center> </h1>
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li class="dropdown">
					<a href="../categories/main/cat.html" class="dropbtn">Categories</a>
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
				<li><a href="../navi_re/Reviews.html">Reviews</a></li>
				<li><a href="../navi_ab/About_us.html">About us</a></li>
				<li><a href="../navi_log/Log_in.html">Log in</a></li>


				<div>	

					<form class="search-form" action="phpsearch/search.php" method="POST">
						<input type="text" name="search" placeholder="Search">
						<button type="submit" name="submit-search">Search</button>
					</form>
					
				</div>

			</ul>

		</div>

		<h1>Search page</h1>
		<div class="article-container">

			<?php 
			$searchs = $_POST['search'];
			$sql ="SELECT * from films where `movie_title` LIKE '%$searchs%'";

			$result = mysqli_query($conn,$sql);
			$queryResult = mysqli_num_rows($result);

		// calculate how many results
			
			echo "There are ".$queryResult." Results! ";

			if($queryResult > 0){
				while ($row = mysqli_fetch_assoc($result)){

					?>
					<div class="zoom">

						<img src="<?php echo $row['movie_pic'] ?>">
						<h4><?php echo $row['movie_title']; ?></h4>

					</div>

					


					<?php

				}
			} 
			else { 

				?>
				<div id="no_result">
					<?php echo"There are no result matching your search! "; ?>
				</div>
				<?php
			}
			?>

		</div>
