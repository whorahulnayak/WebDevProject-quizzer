<?php 
session_start();
//website logs in only ig user us in session 
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>
	<a href="signup.php">Sign up page</a>
	<br>
	<!-- take username  from functions.php assoc array and use it -->
	Hello, <?php echo $user_data['user_name']; ?></body>
</html>