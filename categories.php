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
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="hamburgers.css" rel="stylesheet">
        <link rel="stylesheet" href="hamburgers.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="categories.css">

    <title>Quizzer</title>
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
    <a class="nav-item nav-link active" href="#">Home</a>
    <a class="nav-item nav-link active" href="#">Categories</a>
    <a class="nav-item nav-link active" href="#">Leaderboard</a>
    <a class="nav-item nav-link active" href="#">Rules</a>
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
        
          <a href="#" class="cardn education">
               <div class="overlay"></div>
            <div class="circle">
               <!-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path d="M11.266 7l12.734-2.625-.008-.042-1.008-4.333-21.169 4.196c-1.054.209-1.815 1.134-1.815 2.207v14.597c0 1.657 1.343 3 3 3h18c1.657 0 3-1.343 3-3v-14h-12.734zm8.844-5.243l2.396 1.604-2.994.595-2.398-1.605 2.996-.594zm-5.898 1.169l2.4 1.606-2.994.595-2.401-1.607 2.995-.594zm-5.904 1.171l2.403 1.608-2.993.595-2.406-1.61 2.996-.593zm-2.555 5.903l2.039-2h3.054l-2.039 2h-3.054zm4.247 10v-7l6 3.414-6 3.586zm4.827-10h-3.054l2.039-2h3.054l-2.039 2zm6.012 0h-3.054l2.039-2h3.054l-2.039 2z"/></svg> -->
            </div>
          
            <p>Movies</p>
          </a>
        
      </div>
      
      <!-- 2 -->
      <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        <a href="#" class="cardn credentialing">
             <div class="overlay"></div>
          <div class="circle">
          </div>
        
          <p>Sports</p>
        </a>
      </div>
      
      <!-- 3 -->
      <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        <a href="#" class="cardn wallet">
             <div class="overlay"></div>
          <div class="circle">
          </div>
        
          <p>TV Shows</p>
        </a>
      </div>
      
      <!-- 4 -->
      <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        <a href="#" class="cardn human-resources">
             <div class="overlay"></div>
          <div class="circle">
          </div>
        
          <p>Science</p>
        </a>
      </div>
     <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        
          <a href="#" class="cardn education">
               <div class="overlay"></div>
            <div class="circle">
               <!-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path d="M11.266 7l12.734-2.625-.008-.042-1.008-4.333-21.169 4.196c-1.054.209-1.815 1.134-1.815 2.207v14.597c0 1.657 1.343 3 3 3h18c1.657 0 3-1.343 3-3v-14h-12.734zm8.844-5.243l2.396 1.604-2.994.595-2.398-1.605 2.996-.594zm-5.898 1.169l2.4 1.606-2.994.595-2.401-1.607 2.995-.594zm-5.904 1.171l2.403 1.608-2.993.595-2.406-1.61 2.996-.593zm-2.555 5.903l2.039-2h3.054l-2.039 2h-3.054zm4.247 10v-7l6 3.414-6 3.586zm4.827-10h-3.054l2.039-2h3.054l-2.039 2zm6.012 0h-3.054l2.039-2h3.054l-2.039 2z"/></svg> -->
            </div>
          
            <p>Technology</p>
          </a>
        
      </div>
      
      <!-- 2 -->
      <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        <a href="#" class="cardn credentialing">
             <div class="overlay"></div>
          <div class="circle">
          </div>
        
          <p>Credentialinnnnng</p>
        </a>
      </div>
      
      <!-- 3 -->
      <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        <a href="#" class="cardn wallet">
             <div class="overlay"></div>
          <div class="circle">
          </div>
        
          <p>Wallet</p>
        </a>
      </div>
      
      <!-- 4 -->
      <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        <a href="#" class="cardn human-resources">
             <div class="overlay"></div>
          <div class="circle">
          </div>
        
          <p>Human Resources</p>
        </a>
      </div>

      <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        
          <a href="#" class="cardn education">
               <div class="overlay"></div>
            <div class="circle">
               <!-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path d="M11.266 7l12.734-2.625-.008-.042-1.008-4.333-21.169 4.196c-1.054.209-1.815 1.134-1.815 2.207v14.597c0 1.657 1.343 3 3 3h18c1.657 0 3-1.343 3-3v-14h-12.734zm8.844-5.243l2.396 1.604-2.994.595-2.398-1.605 2.996-.594zm-5.898 1.169l2.4 1.606-2.994.595-2.401-1.607 2.995-.594zm-5.904 1.171l2.403 1.608-2.993.595-2.406-1.61 2.996-.593zm-2.555 5.903l2.039-2h3.054l-2.039 2h-3.054zm4.247 10v-7l6 3.414-6 3.586zm4.827-10h-3.054l2.039-2h3.054l-2.039 2zm6.012 0h-3.054l2.039-2h3.054l-2.039 2z"/></svg> -->
            </div>
          
            <p>Movies</p>
          </a>
        
      </div>
      
      <!-- 2 -->
      <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        <a href="#" class="cardn credentialing">
             <div class="overlay"></div>
          <div class="circle">
          </div>
        
          <p>Sports</p>
        </a>
      </div>
      
      <!-- 3 -->
      <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        <a href="#" class="cardn wallet">
             <div class="overlay"></div>
          <div class="circle">
          </div>
        
          <p>TV Shows</p>
        </a>
      </div>
      
      <!-- 4 -->
      <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        <a href="#" class="cardn human-resources">
             <div class="overlay"></div>
          <div class="circle">
          </div>
        
          <p>Science</p>
        </a>
      </div>
     <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        
          <a href="#" class="cardn education">
               <div class="overlay"></div>
            <div class="circle">
               <!-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path d="M11.266 7l12.734-2.625-.008-.042-1.008-4.333-21.169 4.196c-1.054.209-1.815 1.134-1.815 2.207v14.597c0 1.657 1.343 3 3 3h18c1.657 0 3-1.343 3-3v-14h-12.734zm8.844-5.243l2.396 1.604-2.994.595-2.398-1.605 2.996-.594zm-5.898 1.169l2.4 1.606-2.994.595-2.401-1.607 2.995-.594zm-5.904 1.171l2.403 1.608-2.993.595-2.406-1.61 2.996-.593zm-2.555 5.903l2.039-2h3.054l-2.039 2h-3.054zm4.247 10v-7l6 3.414-6 3.586zm4.827-10h-3.054l2.039-2h3.054l-2.039 2zm6.012 0h-3.054l2.039-2h3.054l-2.039 2z"/></svg> -->
            </div>
          
            <p>Technology</p>
          </a>
        
      </div>
      
      <!-- 2 -->
      <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        <a href="#" class="cardn credentialing">
             <div class="overlay"></div>
          <div class="circle">
          </div>
        
          <p>Credentialinnnnng</p>
        </a>
      </div>
      
      <!-- 3 -->
      <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        <a href="#" class="cardn wallet">
             <div class="overlay"></div>
          <div class="circle">
          </div>
        
          <p>Wallet</p>
        </a>
      </div>
      
      <!-- 4 -->
      <div class="col-sm-6 col-lg-4 col-xl-3 parent2">
        <a href="#" class="cardn human-resources">
             <div class="overlay"></div>
          <div class="circle">
          </div>
        
          <p>Human Resources</p>
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
    var scr = window.addEventListener("scroll",function(){
      var scroll = window.scrollY;
      if(scroll!=0)
      {
          brand.classList.add('disappear');
      }
      else
      {
       
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