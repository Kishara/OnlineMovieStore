<!DOCTYPE html>
<html>
<head>
	<title>Upload Image using form</title>
	<link href="../css/upload.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
		<link rel="stylesheet" href="../css/footer-distributed-with-address-and-phones.css">
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

		<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	</script>
	<script src="script.js"></script>
</head>
<style>
#im{

	background-color: none;
	background:rgba(0,0,0,0.5);
}

#submit{
	background-color: none;
	background:rgba(0,0,0,0.5);
}
</style>
<body>
	<!-- Required Div Starts Here -->
	<div id="formdiv">
		<h3 id="im">Upload Form</h3>
		<form action="" enctype="multipart/form-data" id="form" method="post" name="form">
			<div id="upload">
				<input id="file" name="file" type="file">
			</div><a href="Advertiser.php">
				<input id="submit" name="submit" type="submit" value="Upload"></a>
			</form>
			<div id="detail">
				<ul>
				</ul>
			</div>
		</div>
		<div id="clear"></div>
		<div id="preview">
			<img id="previewimg" src=""><img id="deleteimg" src="../images/delete.png">
			<span class="pre">PREVIEW</span>
		</div>
		<div id="message">
			<?php include 'uploadphp.php';?>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
// Function for Preview Image.
$(function() {
	$(":file").change(function() {
		if (this.files && this.files[0]) {
			var reader = new FileReader();
			reader.onload = imageIsLoaded;
			reader.readAsDataURL(this.files[0]);
		}
	});
});
function imageIsLoaded(e) {
	$('#message').css("display", "none");
	$('#preview').css("display", "block");
	$('#previewimg').attr('src', e.target.result);
};
// Function for Deleting Preview Image.
$("#deleteimg").click(function() {
	$('#preview').css("display", "none");
	$('#file').val("");
});
// Function for Displaying Details of Uploaded Image.
$("#submit").click(function() {
	$('#preview').css("display", "none");
	$('#message').css("display", "block");
});
});


</script>
</body>
</html>