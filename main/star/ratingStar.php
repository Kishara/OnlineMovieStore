<html>
<head><title>Rating star</title></head>
<body>
  <form method="post" action="ratingStar.php">
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
  $cfg_min_stars = $_POST['minstar']; //min star
  $cfg_max_stars = $_POST['maxstar']; //max star
  $temp_stars = $_POST['rating']; //average rating

  for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) { // simple for loop
   
    if ($temp_stars >= 1) { // it going to check if your average rating is greater than equal to 1 or not if it is then it give you full star.
      echo '<img src="Star (Full).png" width="100"/>';
      $temp_stars--; //after getting full star it decremnt the value and contiune the loop.
    }else {
      if ($temp_stars >= 0.5) { // if user select 3.5 rating, so in above condition at last it remain 0.5 rating will get left. then it came to this condition and give you the half star.
       echo '<img src="Star (Half Full).png" width="100"/>';
        $temp_stars -= 0.5;
      }else { // at last but not the least when value gets zero then it return empty star.
        echo '<img src="Star (Empty).png" width="100"/>';
      }
    }
  }
}
?>
