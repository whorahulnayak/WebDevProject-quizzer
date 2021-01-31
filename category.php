<?php 
session_start();
//website logs in only ig user us in session 
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="hamburgers.css" rel="stylesheet">
    <link rel="stylesheet" href="hamburgers.css">
    <link rel="stylesheet" href="categories.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />

    <title>Quizzer</title>
</head>


<body id="my-scrollbar">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark navcolor fixed-top py-0 py-md-1 py-lg-2">

        <!-- Title and Logo -->
        <a class="navbar-brand" href="category.php">
            <img src="img/atom.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            <span id="brand">Quizzer</span>
        </a>

        <!-- <a class="navbar-brand d-none d-lg-block" href="#">
    Quizzer
  </a> -->

        <a class="navbar-brand d-block d-sm-block d-md-block d-lg-none fixed-top mx-auto py-3 w-50" href="#">
            Home
        </a>

        <button class="hamburger hamburger--emphatic is-valid navbar-toggler " type="button" data-toggle="collapse"
            data-target="#expandme">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        <!-- Categories -->
        <div class="collapse navbar-collapse " id="expandme">

            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="category.php">Home</a>
                <a class="nav-item nav-link " href="leaderboard.php">Leaderboard</a>
                <a class="nav-item nav-link " href="rules.html">Rules</a>
                <a class="nav-item nav-link " href="aboutUS.html">About Us</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active " href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
                    Logout</a>
            </div>
        </div>
    </nav>
    <!-- End of Nav Bar -->

    <!-- start of jumbotron -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Hello, <?php echo $user_data['user_name']; ?></h1>
            <p class="lead">Welcome to <strong>Quizzer</strong> , a gamified quiz web app .</p>
        </div>
    </div>
    <!-- Categories Tile -->
    <div class="title">
        <p>Categories</p>
    </div>

    <!-- Cards -->
    <div class="container-fluid row mx-auto justify-content-center text-center ">
        <div class="col-sm-6 col-lg-4 col-xl-3 parent2">

            <a href="quiz1.php" class="cardn yellow">
                <div class="overlay"></div>
                <div class="circle">

                </div>

                <p>Mathematics</p>
            </a>

        </div>

        <!-- 2 -->
        <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
            <a href="quiz2.php" class="cardn green">
                <div class="overlay"></div>
                <div class="circle">
                </div>

                <p>Data structures</p>
            </a>
        </div>

        <!-- 3 -->
        <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
            <a href="quiz3.php" class="cardn purple">
                <div class="overlay"></div>
                <div class="circle">
                </div>

                <p>Sports</p>
            </a>
        </div>

        <!-- 4 -->
        <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
            <a href="quiz4.php" class="cardn blue">
                <div class="overlay"></div>
                <div class="circle">
                </div>

                <p>Movies</p>
            </a>
        </div>
      
        <div class="col-sm-6 col-lg-4 col-xl-3 parent2">

            <a href="#" class="cardn yellow">
                <div class="overlay"></div>
                <div class="circle">

                </div>

                <p>Unlocks at Level 10</p>
            </a>

        </div>

        <!-- 2 -->
        <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
            <a href="#" class="cardn green">
                <div class="overlay"></div>
                <div class="circle">
                </div>

                <p>Unlocks at Level 10</p>
            </a>
        </div>

        <!-- 3 -->
        <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
            <a href="#" class="cardn purple">
                <div class="overlay"></div>
                <div class="circle">
                </div>

                <p>Unlocks at Level 10</p>
            </a>
        </div>

        <!-- 4 -->
        <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
            <a href="#" class="cardn blue">
                <div class="overlay"></div>
                <div class="circle">
                </div>

                <p>Unlocks at Level 10</p>
            </a>
        </div>
    </div>




    <script>
    // Look for .hamburger
    var hamburger = document.querySelector(".hamburger");
    // On click
    hamburger.addEventListener("click", function() {
        // Toggle class "is-active"
        hamburger.classList.toggle("is-active");
        // Do something else, like open/close menu
    });
    var svg = document.querySelector('.navbar-brand');
    var brand = document.querySelector('#brand');

    console.log(scroll);
    var scr = window.addEventListener("scroll", function() {
        var scroll = window.scrollY;
        if (scroll != 0) {
            brand.classList.add('disappear');
        } else {

            brand.classList.remove('disappear');
        }
    });
    $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();
        $('#brand').css({
            opacity: function() {
                var elementHeight = $(this).height();
                return 1 - (elementHeight - scrollTop) / elementHeight;
                // adding transition here

            }
        });
    });
    </script>

    <script script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

    <!-- Smooth Scroll -->
    <!-- <script src="/index.js"></script> -->
</body>

</html>

<!-- Rahul bsdk -->