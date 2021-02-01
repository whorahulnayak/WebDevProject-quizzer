<!DOCTYPE html>
<?php 
session_start();
//website logs in only ig user us in session 
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="hamburgers.css">
    <link rel="stylesheet" href="leaderboard.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Leaderboard</title>
</head>


<body id="my-scrollbar">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark navcolor fixed-top py-0 py-md-1 py-lg-2">

        <!-- Title and Logo -->
        <a class="navbar-brand" href="#">
            <img src="img/atom.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            <span id="brand">Quizzer</span>
        </a>


        <a class="navbar-brand d-block d-sm-block d-md-block d-lg-none fixed-top mx-auto py-3 w-50" href="#">
            Progress
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
                <a class="nav-item nav-link" href="category.php">Home</a>
                <a class="nav-item nav-link active" href="leaderboard.php">Leaderboard</a>
                <a class="nav-item nav-link" href="rules.html">Rules</a>
                <a class="nav-item nav-link" href="aboutUS.html">About Us</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active " href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
                    Logout</a>
            </div>
            <!-- check code -->

        </div>
    </nav>
    <!-- End of Nav Bar -->

    <!-- Categories Tile -->
    <div class="title">
        <p>Your Progress <img src="img/trophy-award-svgrepo-com.svg" class="class-svg" alt=""></p>
    </div>

    <!-- Cards -->

    <div class="col-sm-8 container-fluid row mx-auto justify-content-center text-center parent2">
        <div class="cardn lboard">
            <nav class='ladder-nav'>
                <div class="ladder-title">
                    <h3>Leaderboard</h3>
                </div>
            </nav>
            <table id="rankings" class="leaderboard-results" width="100%">
                <thead>
                    <tr>
                        <th>Ranking</th>
                        <th>Name</th>
                        <th>Total Points</th>
                    </tr>
                </thead>
                <tr>
                    <?php 
                        $con = mysqli_connect("localhost",  
                            "root", "", "login_sample_db"); 
                    
                        /* Mysqli query to fetch rows  
                        in descending order of marks */
                        $result = mysqli_query($con, "SELECT user_name,cat1_score,cat2_score,cat3_score,cat4_score,  
                            tot_score FROM users ORDER BY tot_score DESC");
                        
                        /* First rank will be 1 and  
                            second be 2 and so on */
                        $ranking = 1; 
                        
                        /* Fetch Rows from the SQL query */
                        if (mysqli_num_rows($result)) { 
                            while ($row = mysqli_fetch_array($result)) { 
                                $row['tot_score'] = $row['cat1_score'] + $row['cat2_score'] + $row['cat3_score'] +$row['cat4_score'] ;
                                $name = $row['user_name'];
                                $score = $row['tot_score'];
                                $query1 = "UPDATE users SET tot_score = '$score' where user_name = '$name'";
                                mysqli_query($con, $query1);
                               
                            } 
                    } 
                    $result = mysqli_query($con, "SELECT user_name,tot_score FROM users ORDER BY tot_score DESC"); 
                    if (mysqli_num_rows($result)) { 
                        while ($row = mysqli_fetch_array($result)) { 
                           
                            echo "<tr>
                            <td>{$ranking}</td> 
                            <td>{$row['user_name']}</td> 
                            <td>{$row['tot_score']}</td></tr>"; 
                            $ranking++; 
                        } 
                } 
                    ?>
                    <!-- <td>Username</td>
                        <td>1</td> -->
                </tr>

            </table>


        </div>
    </div>

    <footer class="text-gray-400 bg-gray-900 body-font">
        <div
            class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"
                        class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="ml-3 text-xl">Quizzer</span>
                </a>
                <p class="mt-2 text-sm text-gray-500">A Gamefied Quiz App</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a href="quiz1.php"class="text-gray-400 hover:text-white">Mathematics</a>
                        </li>
                        <li>
                            <a href="quiz2.php"class="text-gray-400 hover:text-white">Data structures</a>
                        </li>
                        <li>
                            <a href="quiz3.php" class="text-gray-400 hover:text-white">Sports</a>
                        </li>
                        <li>
                            <a href="quiz4.php" class="text-gray-400 hover:text-white">Movies</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">Navigate to</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a href="leaderboard.php"class="text-gray-400 hover:text-white">Leaderboard</a>
                        </li>
                        <li>
                            <a href="aboutUS.html"class="text-gray-400 hover:text-white">About Us</a>
                        </li>
                        <li>
                            <a href="rules.html"class="text-gray-400 hover:text-white">Rules</a>
                        </li>
                        <li>
                            <a href="category.php"class="text-gray-400 hover:text-white">Home Page</a>
                        </li>
                    </nav>
                </div>
                -->
            </div>
        </div>
        <div class="bg-gray-800 bg-opacity-75">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-400 text-sm text-center sm:text-left">©️ 2021 Quizzer —
                    <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-500 ml-1"
                        target="_blank">@NSRDevs</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="text-gray-400">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>

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