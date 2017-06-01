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
        <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_short.jpg" data-natural-width="1400" data-natural-height="350">
            <div id="subheader">
          <div id="sub_content">
              <h1>Results in your zone</h1>
                <div><i class="icon_pin"></i> Bhubaneswar</div>
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
        </section><!-- End section -->
        <!-- End SubHeader  -->

        <!-- Content  -->
        <div class="container margin_60_35">
          <div class="row">
            
            <!--End col-md -->
                
            <div class="col-md-12">
                
                
              <!--End tools -->
              <!-- List Of Restaurants Begins Here-->
              <?php
                include "database/db_conection.php";
                $limit = 10;
                $query = "SELECT * FROM restaurant" ;
                $run   = $dbcon->query($query);
                while ($row = $run->fetch_array()) {
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
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End row-->
              </div>
              <!-- End strip_list-->
              <?php } ?>
                      
            </div><!-- End col-md-9-->
                
          </div><!-- End row -->
        </div><!-- End container -->
        <!-- End Content  -->

        <!-- Footer -->
        <?php include "partials/footer.php"; ?>
        <!-- End Footer  -->

        <div class="layer"></div><!-- Mobile menu overlay mask -->

        <?php include "partials/modals.php"; ?>

        <!-- COMMON SCRIPTS -->
        <?php include "partials/scripts.php"; ?>

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