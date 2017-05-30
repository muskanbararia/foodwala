<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>QuickFood - Quality delivery or take away food</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    
    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>

    <!-- BASE CSS -->
    <link href="css/base.css" rel="stylesheet">
    
    <!-- Modernizr -->
    <script src="js/modernizr.js"></script> 

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->
    
    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave" id="status">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div><!-- End Preload -->
    
    <!-- Header ================================================== -->
   <?php include "header.php"; ?>
    <!-- End Header =============================================== -->
    
    <!-- SubHeader =============================================== -->
    <section class="header-video">
    <div id="hero_video">
        <div id="sub_content">
        <video autoplay loop class="" style="position:absolute; z-index:0; width:100%;">
                <source src="../videobg.mp4" type="video/mp4"/>
                </video>
            <h1>Order Dine-In or Delivery Food</h1>
            

            <form method="post" action="list_page.php">
                <div id="custom-search-input">
                    <div class="input-group">
                        <input type="select" class=" search-query"  placeholder="Your Address or postal code">
                        <span class="input-group-btn">
                        <input type="submit" class="btn_search" value="submit">
                        </span>
                        <div id="livesearch"></div>
                    </div>
                </div>
            </form>
        </div><!-- End sub_content -->
    </div>
    <img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="Vimeo" data-video-width="1920" data-video-height="960">
    <div id="count" class="hidden-xs">
        <ul>
            <li><span class="number">2650</span> Restaurant</li>
            <li><span class="number">5350</span> People Served</li>
            <li><span class="number">12350</span> Registered Users</li>
        </ul>
    </div>
    </section><!-- End Header video -->
    <!-- End SubHeader ============================================ -->
    
   <!-- Content ================================================== -->
        <div class="container margin_60">

   <div class="main_title">
    <h2 class="nomargin_top" style="padding-top:0">How it works</h2>

</div>
<div class="row">
    <div class="col-md-3">
        <div class="box_home" id="one">
            <span>1</span>
            <h3>Browse All Restaurants</h3>
            <p>
                Find all restaurants available in your zone.
            </p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="box_home" id="two">
            <span>2</span>
            <h3>Choose a restaurant</h3>
            <p>
                We have more than 1000s of menus online.
            </p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="box_home" id="three">
            <span>3</span>
            <h3>Order food or dine-in</h3>
            <p>
                It's quick, easy and totally secure.
            </p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="box_home" id="four">
            <span>4</span>
            <h3>Delivery or takeaway</h3>
            <p>
                You are lazy? Are you backing home?
            </p>
        </div>
    </div>
</div><!-- End row -->

<div id="delivery_time" class="hidden-xs">
    <strong><span>2</span><span>5</span></strong>
    <h4>The minutes that usually takes to deliver!</h4>
</div>
</div><!-- End container -->
<?php include "rest.php"; ?>
<!-- End white_bg -->

<div class="high_light">
 <div class="container">
    <h3>Choose from over 2,000 Restaurants</h3>

    <a href="list_page.php">View all Restaurants</a>
</div><!-- End container -->
</div><!-- End hight_light -->

<section class="parallax-window" data-parallax="scroll" data-image-src="img/bg_office.jpg" data-natural-width="1200" data-natural-height="600">
    <div class="parallax-content">
        <div class="sub_content">
            <i class="icon_mug"></i>
            <h3>We also deliver to your office</h3>
            <p>
                Just Log in and keep ordering.
            </p>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End Content =============================================== -->

    <!--div class="container margin_60">
      <div class="main_title margin_mobile">
            <h2 class="nomargin_top">Work with Us</h2>
            <p>
                We are hiring
            </p>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <a class="box_work" href="submit_restaurant.html">
                <img src="img/submit_restaurant.jpg" width="848" height="480" alt="" class="img-responsive">
                <h3>Submit your Restaurant<span>Start to earn customers</span></h3>
                <p>Register yourself with us </p>
                <div class="btn_1">Read more</div>
                </a>
            </div>
            <div class="col-md-4">
                <a class="box_work" href="submit_driver.html">
                <img src="img/delivery.jpg" width="848" height="480" alt="" class="img-responsive">
                <h3>We are looking for a Driver<span>Start to earn money</span></h3>
                <p>Lorem ipsum dolor sit amet, ut virtute fabellas vix, no pri falli eloquentiam adversarium. Ea legere labore eam. Et eum sumo ocurreret, eos ei saepe oratio omittantur, legere eligendi partiendo pro te.</p>
                <div class="btn_1">Read more</div>
                </a>
            </div>
      </div>
      <!End row -->
      <!--/div-->
      <!-- End container -->

      <!-- Footer ================================================== -->
      <footer>
        <div class="container">
            <!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#0"><i class="icon-facebook"></i></a></li>
                            <li><a href="#0"><i class="icon-twitter"></i></a></li>
                            <li><a href="#0"><i class="icon-google"></i></a></li>
                            <li><a href="#0"><i class="icon-instagram"></i></a></li>
                            <li><a href="#0"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#0"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#0"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                        <p>
                            © Daily Dukaan 2015
                        </p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer>
    <!-- End Footer =============================================== -->

    <div class="layer"></div><!-- Mobile menu overlay mask -->

    <?php include "modals.php"; ?>

<!-- COMMON SCRIPTS -->
<?php include "scripts.php"; ?>

<!-- SPECIFIC SCRIPTS -->
<script src="js/video_header.js"></script>
<script>
$(document).ready(function() {
    'use strict';
      HeaderVideo.init({
      container: $('.header-video'),
      header: $('.header-video--media'),
      videoTrigger: $("#video-trigger"),
      autoPlayVideo: true
    });    

});
</script>
</body>
</html>
<?php

// include("../database/db_conection.php");      
if(isset($_POST['login-submit']))  
{  
    $email=($_POST['name']);  
    $password=($_POST['password']);  
    $check_user="select * from user WHERE email='$email' AND password='$password'";


    $run= $dbcon->query($check_user);  
    $data = $run->fetch_assoc();

    if($run->num_rows)  
    {  
        $_SESSION['user']=$email;
        echo "<script>window.open('./index.php','_self')</script>";  

    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";

      echo "<script>window.open('./index.php','_self')</script>";       
  }  
}
if(isset($_POST['signin-submit']))  
{  
                        //here getting result from the post array after submitting the form.
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['mobile'];
    $pwd=$_POST['password'];
    $address=$_POST['address'];


                    //here query check if package already registered so can't register again.  
    $check_if_package="select * from user WHERE email='$email'";
    $run_query=$dbcon->query($check_if_package);  

    if($run_query->num_rows>0)  
    {  
        echo "<script>alert('User already exists')</script>";  
        exit();  
    }


    $insert_package="insert into user (name, email, mobile, address,password) VALUE ('$name','$email','$phone','$address','$pwd')";  


    if($dbcon->query($insert_package))  
    {  
        echo"<script>alert('Registered successfully')</script>";
        $_SESSION['user']=$email;
        echo"<script>window.open('./index.php','_self')</script>";
    }     
}
?>