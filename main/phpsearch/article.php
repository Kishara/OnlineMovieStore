<?php  

include 'header.php';

?>




<div class="article-container">
	<?php
	
		$pic = mysqli_real_escape_string($conn, $_GET['pic']);
		$title = mysqli_real_escape_string($conn, $_GET['title']);
	
		$sql = "SELECT * FROM films WHERE movie_pic='$pic' AND movie_title='$title'";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);

		if($queryResults > 0){
			while ($row = mysqli_fetch_assoc($result)) {?>

				<div class='article-box'>
					<h3><?php  echo $row['movie_pic'];?> </h3>
					<h3><?php  echo $row['movie_title'];?> </h3>
				</div>	
			<?php }
		}
	?>
</div>
</body>
</html>