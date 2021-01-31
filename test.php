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
<!-- <?php 
            $query = 'SELECT id,user_name,(cat1_score + cat2_score + cat3_score ) AS tot_score FROM users ORDER BY tot_score ';
            $result = mysqli_query($con, $query);
            while($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]. " - UserName: " . $row["user_name"]. " Total score: " . $row["tot_score"]. "<br>";
                  }
            }
        ?> -->



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

    <link rel="stylesheet" href="hamburgers.css">
    <link rel="stylesheet" href="leaderboard.css">

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
            Leaderboard
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
                <a class="nav-item nav-link active" href="#">Leaderboard</a>
                <a class="nav-item nav-link" href="rules.html">Rules</a>
                <a class="nav-item nav-link" href="aboutUS.html">About Us</a>
            </div>



        </div>
    </nav>
    <!-- End of Nav Bar -->

    <!-- Categories Tile -->
    <div class="title">
        <p>Your Progress</p>
    </div>

    <!-- Cards -->
    <div class="container-fluid row mx-auto justify-content-center text-center ">
        <div class="col-sm-6 col-md-3 parent2">
        <div class="cardn">
            <div class="circleout">
                <div class="circle"></div>
            </div>


            <h1>Steve Jobs</h1>
            <p class="profile">CEO & Founder, Example</p>
            <p>Harvard University</p>

            <p><button>Contact</button></p>

        </div>
    </div>

    <div class="col-sm-6 col-md-3 parent2">
        <div class="cardn">
            <div class="circleout">
                <div class="circle"></div>
            </div>


            <h1>Steve Jobs</h1>
            <p class="profile">CEO & Founder, Example</p>
            <p>Harvard University</p>

            <p><button>Contact</button></p>
        </div>

       
    </div>
        <div class="col-sm-12 col-md-6 parent2">
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
                            <th>Position</th>
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
                            <td>{$row['tot_score']}</td> <br> </tr>"; 
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

    </div>

    <script>
        // Look for .hamburger
        var hamburger = document.querySelector(".hamburger");
        // On click
        hamburger.addEventListener("click", function () {
            // Toggle class "is-active"
            hamburger.classList.toggle("is-active");
            // Do something else, like open/close menu
        });
        var svg = document.querySelector('.navbar-brand');
        var brand = document.querySelector('#brand');

        console.log(scroll);
        var scr = window.addEventListener("scroll", function () {
            var scroll = window.scrollY;
            if (scroll != 0) {
                brand.classList.add('disappear');
            }
            else {

                brand.classList.remove('disappear');
            }
        });
        $(window).scroll(function () {
            var scrollTop = $(this).scrollTop();
            $('#brand').css({
                opacity: function () {
                    var elementHeight = $(this).height();
                    return 1 - (elementHeight - scrollTop) / elementHeight;
                    // adding transition here

                }
            });
        });

    </script>

    <script script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

    <!-- Smooth Scroll -->
    <!-- <script src="/index.js"></script> -->
</body>

</html>