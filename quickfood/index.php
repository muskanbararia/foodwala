<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<?php include "head.php"; ?>

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
                <source src="img/videobg.mp4" type="video/mp4"/>
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
      <?php include("footer.php"); ?>
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