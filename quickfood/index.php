<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
        <?php include "partials/head.php"; ?>

<body>
        <?php include "partials/preloader.php" ?>
        
        <!-- Header  -->
        <?php include "partials/header.php"; ?>
        <!-- End Header -->
        
        <!-- SubHeader -->
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
        </section>
        <!-- End Header video -->
        <!-- End SubHeader -->
        
       <!-- Container -->
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
            </div>
            <!-- End row -->
            <div id="delivery_time" class="hidden-xs">
                <strong><span>2</span><span>5</span></strong>
                <h4>The minutes that usually takes to deliver!</h4>
            </div>
        </div>
        <!-- End container -->

        <?php include "partials/rest.php"; ?>

        <!-- End white_bg -->
        <div class="high_light">
            <div class="container">
                <h3>Choose from over 2,000 Restaurants</h3>
                <a href="list_page.php">View all Restaurants</a>
            </div>
            <!-- End container -->
        </div>
        <!-- End high_light -->

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
        </section>
        <!-- End section -->

        <!-- Footer -->
        <?php include "partials/footer.php"; ?>
        <!-- End Footer  -->

        <div class="layer"></div><!-- Mobile menu overlay mask -->

        <?php include "partials/modals.php"; ?>

        <!-- COMMON SCRIPTS -->
        <?php include "partials/scripts.php"; ?>

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