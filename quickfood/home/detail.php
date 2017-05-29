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
        
        <h1><?=$name?></h1>
        <div>
            <em><?=$cat?></em>
        </div>
        
    </div><!-- End sub_content -->
</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row">
        
      <!-- End col-md-3 -->
            
      <div class="col-md-9">
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
              $img=$irow[6];
          ?>
          <tr>
            <td>
            <figure class="thumb_menu_list"><img src="img/<?=$img?>" alt="thumb"></figure>
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
            else{
              $opt = 'empty';
            }
            switch ($opt) {
            case "add":
              if(!empty($_POST["quantity"])) {
                $id = $_GET['code'];
                $productByCode = "SELECT * FROM item WHERE id=$id";
                $q = mysqli_query($dbcon, $productByCode);
                $productByCode = mysqli_fetch_array($q);
                $itemArray = array($productByCode[0]=>array('name'=>$productByCode[1], 'code'=>$productByCode[0], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]));
                if(!empty($_SESSION["cart_item"])) {
                  if(in_array($productByCode[0],array_keys($_SESSION["cart_item"]))) {
                    foreach($_SESSION["cart_item"] as $k => $v) {
                        if($productByCode[0] == $k) {
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
                        <p>© daily dukaan 2015</p>
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