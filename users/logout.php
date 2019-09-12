
<?php
	//<meta name="author" content="Prasad Rangana">
session_start();

$_SESSION = array();

	//remove cookies

if (isset($_COOKIE[session_name()])) {
		setcookie(session_name() , '', time()-86400, '/'); //session parameters - name ,value, expaire time, effect vena place 
		
	}

	session_destroy();

	header('Location: login_index.php?logout=yes')
	?>