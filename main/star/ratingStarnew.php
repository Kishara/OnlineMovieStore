<html>
<head><title>Rating new star</title></head>
<body>
  <form method="post" action="ratingStarnew.php">
   <label>Min star:</label><input type=text name="minstar" value="">
   <label>Max star:</label>
    <input type="text" name="maxstar" value="">
    <label>Rating</label>
    <input type="text" name="rating" value="">
    <input type="submit" name="submit" value="submit">
  </form>
</body>
</html>

<?php
if($_POST){
	$cfg_min_stars = $_POST['minstar'];
  	$cfg_max_stars = $_POST['maxstar'];
  	$temp_stars = $_POST['rating'];
}
?>