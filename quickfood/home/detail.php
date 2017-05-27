<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<?php include "head.php"; ?>


<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

<?php //include "preloader.php"; ?>
<!-- End Preload -->

    <!-- Header ================================================== -->
   <?php include "header.php"; ?>
    <!-- End Header =============================================== -->
    
<!-- SubHeader =============================================== -->
<?php
  if(isset($_GET['name'])){
    $rid = $_GET['name'];
    include "../database/db_conection.php";
    $limit = 10;
    $query = "SELECT * FROM restaurant WHERE id = $rid" ;
    $run   = mysqli_query($dbcon, $query);
    while ($row = mysqli_fetch_array($run)) {
      # code...
      $id = $row[0]; 
      $name = $row[1];
      $cat = $row[5];
      $desk = $row[6];
      $loc = $row[2];
      $logo = $row[3];
    }
  }
  else{
    $name = 'EXCE';
  }
  
  ?>
<section class="parallax-window" data-parallax="scroll" data-image-src="img/sub_header_2.jpg" data-natural-width="1400" data-natural-height="470">
    <div id="subheader">
  <div id="sub_content">
      <div id="thumb">
        <img src="img/<?=$logo?>" alt="<?=$name?>">
      </div>
        <div class="rating">
            <i class="icon_star voted"></i>
            <i class="icon_star voted"></i>
            <i class="icon_star voted"></i>
            <i class="icon_star voted"></i>
            <i class="icon_star"></i> 
            (<small><a href="detail_page_2.html">Read 98 reviews</a></small>)
        </div>
        <h1><?=$name?></h1>
        <div>
            <em><?=$cat?></em>
        </div>
        <div>
            <i class="icon_pin"></i>
                <?=$loc?> - <strong>Delivery charge:</strong> $10, free over $15.
        </div>
    </div><!-- End sub_content -->
</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#0">Home</a></li>
                <li><a href="#0">Category</a></li>
                <li>Page active</li>
            </ul>
            <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row">
        
      <div class="col-md-3">
              <p><a href="list_page.php" class="btn_side">Back</a></p>
        <div class="box_style_1">
          <ul id="cat_nav">
            
          </ul>
        </div><!-- End box_style_1 -->
                
        <div class="box_style_2 hidden-xs" id="help">
          <i class="icon_lifesaver"></i>
          <h4>Need <span>Help?</span></h4>
          <a href="tel://004542344599" class="phone">+45 423 445 99</a>
          <small>Monday to Friday 9.00am - 7.30pm</small>
        </div>
      </div><!-- End col-md-3 -->
            
      <div class="col-md-6">
        <div class="box_style_2" id="main_menu">
          <h2 class="inner">Menu</h2>
          <!--Sub Menu Starts-->
          <?php
            $query = "SELECT DISTINCT category FROM item WHERE rest_id = $rid" ;
            $run   = mysqli_query($dbcon, $query);
            while ($row = mysqli_fetch_array($run)) {
              # code...
              $cat = $row[0];
          ?>
          <h3 class="nomargin_top" id="starters"><?=$cat?></h3>
          <p>
            Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea.
          </p>
          <table class="table table-striped cart-list">
          <thead>
          <tr>
            <th>
               Item
            </th>
            <th>
               Price
            </th>
            <th>
               Order
            </th>
          </tr>
          </thead>
          <tbody>
          <?php
            $query = "SELECT * FROM item WHERE rest_id = $rid AND category = '$cat'" ;
            $runz   = mysqli_query($dbcon, $query);
            $i = 0;
            while ($irow = mysqli_fetch_array($runz)) {
              # code...
              $id     = $irow[0];
              $i += 1;
              $item   = $irow[2];
              $catg   = $irow[3];
              $sub    = $irow[4];
              $price  = $irow[5];
              $logo   = $irow[6];
              $desk   = $irow[7];
          ?>
          <tr>
            <td>
            <figure class="thumb_menu_list"><img src="img/menu-thumb-1.jpg" alt="thumb"></figure>
              <h5><?=$i?>. <?=$item?></h5>
              <p>
                <?=$desk?>
              </p>
            </td>
            <td>
              <strong> ₹ <?=$price?></strong>
            </td>
            <!-- Cart Options -->
            <td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an Qty</h5>
                                <form method="post" action="detail.php?action=add&name=<?=$rid?>&code=<?=$id?>">
                                <input type="text" name="quantity" value="1" size="2" />
                                <input type="submit" value="Add to cart" class="btnAddAction" />
                                </form>
                            </div>
                        </div>
                    </td>
          </tr>
          <?}?>
          </tbody>
          </table>
          <hr>
          <? } ?>
          <!--Sub0menu end-->
          
        </div><!-- End box_style_1 -->
      </div><!-- End col-md-6 -->
      
      <!--Cart View -->
      <div class="col-md-3" id="sidebar">
            <div class="theiaStickySidebar">
        <div id="cart_box" >
          <h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
          <table class="table table_summary">
          <tbody>
          <tr>
          <?php
            if(isset($_GET['action'])){
              $opt = $_GET['action'];
            }
            switch ($opt) {
            case "add":
              if(!empty($_POST["quantity"])) {
                $id = $_GET['code'];
                $productByCode = $db_handle->runQuery("SELECT * FROM item WHERE id=$id");
                $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
                
                if(!empty($_SESSION["cart_item"])) {
                  if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
                    foreach($_SESSION["cart_item"] as $k => $v) {
                        if($productByCode[0]["code"] == $k) {
                          if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                            $_SESSION["cart_item"][$k]["quantity"] = 0;
                          }
                          $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                        }
                    }
                  } else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                  }
                } else {
                  $_SESSION["cart_item"] = $itemArray;
                }
              }
            break;
            case "remove":
              if(!empty($_SESSION["cart_item"])) {
                foreach($_SESSION["cart_item"] as $k => $v) {
                  if($_GET["code"] == $k) unset($_SESSION["cart_item"][$k]);        
                  if(empty($_SESSION["cart_item"])) unset($_SESSION["cart_item"]);
                }
              }
            break;
            case "empty":
              unset($_SESSION["cart_item"]);
            break;
          ?>
            <td>
              <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>x</strong> <?=$row[2]?>
            </td>
            <td>
              <strong class="pull-right">$11</strong>
            </td>
          </tr>
          <?
            }
          ?>
          <tr>
            <td>
              <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Burrito
            </td>
            <td>
              <strong class="pull-right">$14</strong>
            </td>
          </tr>
          <tr>
            <td>
              <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>1x</strong> Chicken
            </td>
            <td>
              <strong class="pull-right">$20</strong>
            </td>
          </tr>
          <tr>
            <td>
              <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Corona Beer
            </td>
            <td>
              <strong class="pull-right">$9</strong>
            </td>
          </tr>
          <tr>
            <td>
              <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Cheese Cake
            </td>
            <td>
              <strong class="pull-right">$12</strong>
            </td>
          </tr>
          </tbody>
          </table>
          <hr>
          <div class="row" id="options_2">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
              <label><input type="radio" value="" checked name="option_2" class="icheck">Delivery</label>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
              <label><input type="radio" value="" name="option_2" class="icheck">Take Away</label>
            </div>
          </div><!-- Edn options 2 -->
                    
          <hr>
          <table class="table table_summary">
          <tbody>
          <tr>
            <td>
               Subtotal <span class="pull-right">$56</span>
            </td>
          </tr>
          <tr>
            <td>
               Delivery fee <span class="pull-right">$10</span>
            </td>
          </tr>
          <tr>
            <td class="total">
               TOTAL <span class="pull-right">$66</span>
            </td>
          </tr>
          </tbody>
          </table>
          <hr>
          <a class="btn_full" href="cart.html">Order now</a>
        </div><!-- End cart_box -->
                </div><!-- End theiaStickySidebar -->
      </div><!-- End col-md-3 -->
            
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
                            <option value="USD" selected>INR</option>
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
<script src="js/theia-sticky-sidebar.js"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>
<script>
$('#cat_nav a[href^="#"]').on('click', function (e) {
      e.preventDefault();
      var target = this.hash;
      var $target = $(target);
      $('html, body').stop().animate({
        'scrollTop': $target.offset().top - 70
      }, 900, 'swing', function () {
        window.location.hash = target;
      });
    });
</script>

</body>
</html>