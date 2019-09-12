<!DOCTYPE html>
<html>
<head>
	<title>Upload Image using form</title>
	<link href="../css/upload.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="script.js"></script>

</head>
<style>
#im{

	background-color: #5B90C2;
	background:rgba(0,0,0,0.5);
}

#submit{
	background-color: #5B90C2;
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
					<li>To Choose file Click on folder.</li>
					<li>You can upload- <b>images/Videos(jpeg,jpg,png,mp4,mkv).</b></li>
					<li>Image/Video should be less than 100mb in size.</li>
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