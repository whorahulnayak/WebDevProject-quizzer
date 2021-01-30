<?php 
session_start();
//website logs in only ig user us in session 
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<?php 
    $highscore = 20;
    $cat1_score = $highscore;
     $_SESSION['user_name']  = 'rahul';
    $query = "select * users from user_name ='$user_name' limit 1";
    $query2 = "UPDATE users SET cat1_score = '$cat1_score' WHERE user_name = '$username'";
    mysqli_query($con, $query2);
?>
