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
      <h1>24 results in your zone</h1>
        <div><i class="icon_pin"></i> 135 Newtownards Road, Belfast, BT4 1AB</div>
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
    
    <div class="col-md-3">
      <p>
        <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a>
      </p>
      <div id="filters_col">
        <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters <i class="icon-plus-1 pull-right"></i></a>
        <div class="collapse" id="collapseFilters">
          <div class="filter_type">
                      <h6>Distance</h6>
                        <input type="text" id="range" value="" name="range">
            <h6>Type</h6>
            <ul>
              <li><label><input type="checkbox" checked class="icheck">All <small>(49)</small></label></li>
              <li><label><input type="checkbox" class="icheck">American <small>(12)</small></label><i class="color_1"></i></li>
              <li><label><input type="checkbox" class="icheck">Chinese <small>(5)</small></label><i class="color_2"></i></li>
              <li><label><input type="checkbox" class="icheck">Hamburger <small>(7)</small></label><i class="color_3"></i></li>
              <li><label><input type="checkbox" class="icheck">Fish <small>(1)</small></label><i class="color_4"></i></li>
              <li><label><input type="checkbox" class="icheck">Mexican <small>(49)</small></label><i class="color_5"></i></li>
              <li><label><input type="checkbox" class="icheck">Pizza <small>(22)</small></label><i class="color_6"></i></li>
              <li><label><input type="checkbox" class="icheck">Sushi <small>(43)</small></label><i class="color_7"></i></li>
            </ul>
          </div>
          <div class="filter_type">
            <h6>Rating</h6>
            <ul>
              <li><label><input type="checkbox" class="icheck"><span class="rating">
              <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i>
              </span></label></li>
              <li><label><input type="checkbox" class="icheck"><span class="rating">
              <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
              </span></label></li>
              <li><label><input type="checkbox" class="icheck"><span class="rating">
              <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
              </span></label></li>
              <li><label><input type="checkbox" class="icheck"><span class="rating">
              <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
              </span></label></li>
              <li><label><input type="checkbox" class="icheck"><span class="rating">
              <i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
              </span></label></li>
            </ul>
          </div>
          <div class="filter_type">
            <h6>Options</h6>
            <ul class="nomargin">
              <li><label><input type="checkbox" class="icheck">Delivery</label></li>
              <li><label><input type="checkbox" class="icheck">Take Away</label></li>
              <li><label><input type="checkbox" class="icheck">Distance 10Km</label></li>
              <li><label><input type="checkbox" class="icheck">Distance 5Km</label></li>
            </ul>
          </div>
        </div><!--End collapse -->
      </div><!--End filters col-->
    </div><!--End col-md -->
        
    <div class="col-md-9">
        
        <div id="tools">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="styled-select">
              <select name="sort_rating" id="sort_rating">
                <option value="" selected>Sort by ranking</option>
                <option value="lower">Lowest ranking</option>
                <option value="higher">Highest ranking</option>
              </select>
            </div>
          </div>
          <div class="col-md-9 col-sm-9 hidden-xs">
            <a href="grid_list.html" class="bt_filters"><i class="icon-th"></i></a>
          </div>
        </div>
      </div>
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
          $logo = $row[4];
      ?> 
      <div class="strip_list wow fadeIn" data-wow-delay="0.1s">
        <div class="ribbon_1">
          Popular
        </div>
        <div class="row">
          <div class="col-md-9 col-sm-9">
            <div class="desc">
              <div class="thumb_strip">
                <a href="detail_page.html"><img src="img/<?=$img?>" alt="<?=$name?>"></a>
              </div>
              <div class="rating">
                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
              </div>
              <h3><?=$name?></h3>
              <div class="type">
                <?=$cat?>
              </div>
              <div class="location">
                <?=$loc?><span class="opening">Opens at 17:00.</span> Minimum order: $15
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
                <a href="detail.php?name=<?=$id?>" class="btn_1">View Menu</a>
              </div>
            </div>
          </div>
        </div>
        <!-- End row-->
      </div>
      <!-- End strip_list-->
      <? } ?>
            <a href="#0" class="load_more_bt wow fadeIn" data-wow-delay="0.2s">Load more...</a>  
    </div><!-- End col-md-9-->
        
  </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->

<!-- Footer ================================================== -->
  <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>Secure payments with</h3>
                    <p><img src="img/cards.png" alt="" class="img-responsive"></p>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="faq.html">Faq</a></li>
                         <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="#0" data-toggle="modal" data-target="#login_2">Login</a></li>
                        <li><a href="#0" data-toggle="modal" data-target="#register">Register</a></li>
                        <li><a href="#0">Terms and conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3"  id="newsletter">
                    <h3>Newsletter</h3>
                    <p>Join our newsletter to keep be informed about offers and news.</p>
          <div id="message-newsletter_2"></div>
            <form method="post" action="http://www.ansonika.com/quickfood/assets/newsletter.php" name="newsletter_2" id="newsletter_2">
                        <div class="form-group">
                            <input name="email_newsletter_2" id="email_newsletter_2"  type="email" value=""  placeholder="Your mail" class="form-control">
                          </div>
                            <input type="submit" value="Subscribe" class="btn_1" id="submit-newsletter_2">
                      </form>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="lang">
                            <option value="English" selected>English</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Russian">Russian</option>
                        </select>
                    </div>
                    <div class="styled-select">
                        <select class="form-control" name="currency" id="currency">
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>
                </div>
            </div><!-- End row -->
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
        <form action="#" class="popup-form" id="myLogin">
                  <div class="login_icon"><i class="icon_lock_alt"></i></div>
          <input type="text" class="form-control form-white" placeholder="Username">
          <input type="text" class="form-control form-white" placeholder="Password">
          <div class="text-left">
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submit" class="btn btn-submit">Submit</button>
        </form>
      </div>
    </div>
  </div><!-- End modal -->   
    
<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
        <form action="#" class="popup-form" id="myRegister">
                  <div class="login_icon"><i class="icon_lock_alt"></i></div>
          <input type="text" class="form-control form-white" placeholder="Name">
          <input type="text" class="form-control form-white" placeholder="Last Name">
                    <input type="email" class="form-control form-white" placeholder="Email">
                    <input type="text" class="form-control form-white" placeholder="Password"  id="password1">
                    <input type="text" class="form-control form-white" placeholder="Confirm password"  id="password2">
                    <div id="pass-info" class="clearfix"></div>
          <div class="checkbox-holder text-left">
            <div class="checkbox">
              <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
              <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
            </div>
          </div>
          <button type="submit" class="btn btn-submit">Register</button>
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