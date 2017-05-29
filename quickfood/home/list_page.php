<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<?php include "head.php"; ?>

<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

<?php include "preloader.php"; ?>
<!-- End Preload -->

<!-- Header ================================================== -->
<?php include "header.php"; ?>
<!-- End Header =============================================== -->
    
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_short.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
  <div id="sub_content">
      <h1>Results in your zone</h1>
        <div><i class="icon_pin"></i> Bhubaneswar</div>
    </div><!-- End sub_content -->
</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <!--div id="position">
        <div class="container">
            <ul>
                <li><a href="#0">Home</a></li>
                <li><a href="#0">Category</a></li>
                <li>Page active</li>
            </ul>
             <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
        </div>
    </div-->
    <!-- Position -->
    
    <!--div class="collapse" id="collapseMap">
      <div id="map" class="map"></div>
    </div-->
  <!-- End Map -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
  <div class="row">
    
    <!--End col-md -->
        
    <div class="col-md-12">
        
        
      <!--End tools -->
      <!-- List Of Restaurants Begins Here-->
      <?php
        include "../database/db_conection.php";
        $limit = 10;
        $query = "SELECT * FROM restaurant" ;
        $run   = mysqli_query($dbcon, $query);
        while ($row = mysqli_fetch_array($run)) {
          # code...
          $id = $row[0]; 
          $name = $row[1];
          $cat = $row[5];
          $desk = $row[6];
          $loc = $row[2];
          $logo = $row[3];
      ?> 
      <div class="strip_list wow fadeIn" data-wow-delay="0.1s">
        <div class="ribbon_1">
          Popular
        </div>
        <div class="row">
          <div class="col-md-9 col-sm-9">
            <div class="desc">
              <div class="thumb_strip">
                <a href="detail_page.html"><img src="img/<?=$logo?>" alt="<?=$name?>"></a>
              </div>
              
              <h3><?=$name?></h3>
              <div class="type">
                <?=$cat?>
              </div>
              <div class="location">
                <?=$loc?><span class="opening">Opens at 10:00.</span> 
              </div>
              <ul>
                <li>Dine-In<i class="icon_check_alt2 ok"></i></li>
                <li>Delivery<i class="icon_check_alt2 no"></i></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="go_to">
              <div>
              <ul>
                <a href="detail.php?name=<?=$id?>" class="btn_1">View Menu</a>
                <a href="#0" class="btn_1" data-toggle="modal" data-target="#dineIn<?=$id?>" style="margin-top: 5px">Dine IN</a>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End row-->
      </div>
      <!-- End strip_list-->
        <!-- Dine In modal -->   
      <div class="modal" id="dineIn<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content modal-popup">
            <?php 
            if (!isset($_SESSION['user']))
            {
              ?>
              <h1>Please Login to order</h1>
              <?php
            }
            else{
            ?>

              <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
              <form action="list-page.php" method ="post" class="popup-form" id="dineIn<?$id?>">
                <input type="text" class="form-control form-white" id="datetimepicker2" />
                <script type="text/javascript">
                  $('#datetimepicker2').datetimepicker({format : "DD/MM/YYYY hh:mm"});
                </script>
                <input type="text" class="form-control form-white" placeholder="Name">
                <input type="text" class="form-control form-white" placeholder="Last Name">
                <input type="email" class="form-control form-white" placeholder="Email">
                <input type="text" class="form-control form-white" placeholder="Mobile">
                <input type="text" class="form-control form-white" placeholder="No. Of Persons">
                <div id="pass-info" class="clearfix"></div>
                <button type="submit" class="btn btn-submit" name="book">Book Table</button>
              </form>
              <?php
            }
            ?>
            </div>
          </div>
        </div>
          <!-- End Register modal -->
      <? } ?>
              
    </div><!-- End col-md-9-->
        
  </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->

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
                        <p>© Quick Food 2015</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer>
<!-- End Footer =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->
    
<!-- Login modal -->   
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
        <form action="index.php" method="post" class="popup-form" id="myLogin">
                  <div class="login_icon"><i class="icon_lock_alt"></i></div>
          <input type="text" name="name" class="form-control form-white" placeholder="Useremail">
          <input type="text" name="password" class="form-control form-white" placeholder="Password">
          
          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
        </form>
      </div>
    </div>
  </div><!-- End modal -->   
    
<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
        <form action="index.php" method="post" class="popup-form" id="myRegister">
                  <div class="login_icon"><i class="icon_lock_alt"></i></div>
          <input type="text" name="name" class="form-control form-white" placeholder="Name">
          <input type="text" name="mobile" class="form-control form-white" placeholder="Mobile">
                    <input type="email" name="email" class="form-control form-white" placeholder="Email">
                    <input type="text" name="address" class="form-control form-white" placeholder="Address">
                    <input type="text" name="password" class="form-control form-white" placeholder="Password"  id="password1">
                    <input type="text" class="form-control form-white" placeholder="Confirm password"  id="password2">
                    <div id="pass-info" class="clearfix"></div>
          
          <input type="submit" name="signin-submit" id="signin-submit" tabindex="4" class="form-control btn btn-login" value="Sign In">
        </form>
      </div>
    </div>
  </div><!-- End Register modal -->
    
     <!-- Search Menu -->
  <div class="search-overlay-menu">
    <span class="search-overlay-close"><i class="icon_close"></i></span>
    <form role="search" id="searchform" method="get">
      <input value="" name="q" type="search" placeholder="Search..." />
      <button type="submit"><i class="icon-search-6"></i>
      </button>
    </form>
  </div>
  <!-- End Search Menu -->
 
    
<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script  src="js/cat_nav_mobile.js"></script>
<script>$('#cat_nav').mobileMenu();</script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAs_JyKE9YfYLSQujbyFToZwZy-wc09w7s"></script>
<script src="js/map.js"></script>
<script src="js/infobox.js"></script>
<script src="js/ion.rangeSlider.js"></script>
<script>
    $(function () {
     'use strict';
        $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 0,
            max: 15,
            from: 0,
            to:5,
            type: 'double',
            step: 1,
            prefix: "Km ",
            grid: true
        });
    });
</script>
</body>
</html>