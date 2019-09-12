<?php session_start();//sesstion varible eka start kala 
?>
<?php require_once('inc/connection.php'); ?>
<?php
	// Check user is logged?
if (!isset($_SESSION['user_id'])) {
	header('Location: login_index.php');
}

$user_list ='';

	//getting the list of users
$query = "SELECT * FROM member WHERE is_deleted = 0 ORDER BY first_name";
$users = mysqli_query($connection, $query);

if ($users) {
	while ($user = mysqli_fetch_assoc($users)) 
	{
		$user_list .= 	"<tr>";
		$user_list .=	"<td>{$user['first_name']}</td>";
		$user_list .=	"<td>{$user['last_name']}</td>";
		$user_list .=	"<td>{$user['type']}</td>";
		$user_list .=	"<td>{$user['last_login']}</td>";
				$user_list .=	"<td><a href=\"modify_users.php?user_id={$user['id']} \"> Edit </a> </td>";//link user edit page
				$user_list .=	"<td><a href=\"delete.php?user_id={$user['id']} \"> Delete </a> </td>";//link user Delete page

				$user_list .= "</tr>";
			}
		}
		else{
			echo "Database query failed";
		}

		?>

		<!DOCTYPE html>
		<html>
		<head>
			<meta name="author" content="Prasad Rangana">
			<title>Admin Profile</title>
			<link rel ="stylesheet" href="css/user.css">
		</head>
		<body style="background:url(img/admin_bkg.jpg) ; background-repeat: no-repeat; background-size: cover;">
			<header style="background-color: #D4E6F1">
				<div class="appname">Admin Profile</div>
				<div class="loggedin">Welcome <?php echo $_SESSION['first_name']; ?> ! <a href="logout.php">Log Out</a> </div>

				<style>
					#tohome{
							background : #0cd3ff;
							color :  #060862;
							padding: 10px;
							bottom: 650px;
							right:5%;
							border-radius: 5px;
							opacity: 0.5;
							width:100px;
							cursor: pointer;

							}
				</style>
			</header>

			<main>
				<!-- 	browse the homepage-->	
				<a href="../main/index.php"><button id="tohome"><b>Home</b></button></a>

				<h1>Users <span> <a href="add_user.php"> + Add New users</a> </span></h1>

				<table class="masterlist">

					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Type</th>
						<th>Last Login</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>

					<?php echo $user_list;
					?>
				</table>

			</main>


		</body>
		</html>