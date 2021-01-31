<?php 
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		//collect score from user
		$score = $_POST['q1_score'];
		$username = $user_data['user_name'];
		if(!empty($score))//we dont want UN to be a No
		{

			//save to database 
			echo $score;
			echo $username;
			$query1 = "UPDATE  users SET cat1_score = '$score'  WHERE user_name = '$username'";
			//$query = "UPDATE users SET cat1_score = '$score' WHERE user_name = '$username'";
			mysqli_query($con, $query1);

			header("Location: category.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dynamic Quiz Project</title>
		<link type='text/css' rel='stylesheet' href='quiz.css'/>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open Sans"/>
	</head>
	<body>
		<div id='container'>
			<div id='title'>
				<h1>Learning Js Properly: Project #1 - Dynamic Quiz</h1>
			</div>
   			<br/>
              <div id='quiz'></div>
    		<div class='button' id='next'><a href='#'>Next</a></div>
    		<div class='button' id='prev'><a href='#'>Prev</a></div>
    		<div class='button' id='start'> <a href='#'>Start Over</a></div>
    		<!-- <button class='' id='next'>Next</a></button>
    		<button class='' id='prev'>Prev</a></button>
    		<button class='' id='start'> Start Over</a></button> -->
			<form action="" method="post">
			<?php echo $user_data['user_name']?>
				<input type="text" name="q1_score" id="">
				<input type="submit" value="submit">
			</form>
    	</div>

		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
        <script type="text/javascript" src='questions.json'></script>
        <script type='text/javascript' src="quiz1.js"></script>
         
	</body>
</html>
