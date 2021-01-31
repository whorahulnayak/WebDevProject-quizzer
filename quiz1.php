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
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="hamburgers.css" rel="stylesheet">
		<link rel="stylesheet" href="hamburgers.css">
		<link rel="stylesheet" href="categories.css">
    	<link rel="stylesheet" href="quiz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />

    <title>Mathematics Quiz</title>
</head>


<body id="my-scrollbar">
  <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark navcolor fixed-top py-0 py-md-1 py-lg-2">
  
  <!-- Title and Logo -->
  <a class="navbar-brand" href="#">
    <img src="img/atom.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    <span id="brand">Quizzer</span>   
  </a>

  <!-- <a class="navbar-brand d-none d-lg-block" href="#">
    Quizzer
  </a> -->

<a class="navbar-brand d-block d-sm-block d-md-block d-lg-none fixed-top mx-auto py-3 w-50" href="#">
    Categories
  </a>

<button class="hamburger hamburger--emphatic is-valid navbar-toggler " type="button" data-toggle="collapse" data-target="#expandme">
  <span class="hamburger-box">
    <span class="hamburger-inner"></span>
  </span>
</button>
<!-- Categories -->
<div class="collapse navbar-collapse " id="expandme">

<div class="navbar-nav">
    <a class="nav-item nav-link active" href="category.php">Home</a>
    <a class="nav-item nav-link active" href="category.php">Categories</a>
    <a class="nav-item nav-link active" href="leaderboard.php">Leaderboard</a>
    <a class="nav-item nav-link active" href="rules.html">Rules</a>
    <a class="nav-item nav-link active" href="aboutUS.html">About Us</a>
  </div>
  <div class="navbar-nav ml-auto">
  <a class="nav-item nav-link active "href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
  </div>

<!-- Search -->
<!-- <form class="form-inline ml-auto">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
</form> -->

</div>
</nav>
<!-- End of Nav Bar -->

		<div id='container'>
			<div id='title'>
				<h1>Let's Get Quizzing</h1>
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
			
				<input type="text" name="q1_score" id="">
				<input type="submit" value="submit">
			</form>
    	</div>

		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
        <!-- <script type="text/javascript" src='questions.json'></script> -->
        <script type='text/javascript' src="cat1.js"></script>
         
	</body>
</html>
