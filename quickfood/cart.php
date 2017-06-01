<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<?php
if(!isset($_GET['mode'])){
  if(isset($_SERVER['HTTP_REFERER'])){
    $referer= $_SERVER['HTTP_REFERER'];
    header('LOCATION:'.$referer);
  }  
  header('LOCATION:list_page.php');
}
else{
  $mode = $_GET['mode'];
}

include("database/db_conection.php");
$user_id = $_SESSION['user'];
$sql = "SELECT COUNT(*) AS cart_tot FROM cart WHERE user_id='$user_id'";
$result = $dbcon->query($sql);
$row = $result->fetch_assoc();
if($row['cart_tot']==0){
  header('LOCATION:list_page.php');
}
?>

        <?php include "partials/head.php"; ?>

<body>
        <?php include "partials/preloader.php"; ?>
        
        <!-- Header  -->
        <?php include "partials/header.php"; ?>
        <!-- End Header -->

        <!-- SubHeader  -->
        <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
          <div id="subheader">
            <div id="sub_content">
             <h1>Place your order</h1>
             <div class="bs-wizard">
              <div class="col-xs-4 bs-wizard-step active">
                <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="#0" class="bs-wizard-dot"></a>
              </div>
              
              <div class="col-xs-4 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="cart_2.html" class="bs-wizard-dot"></a>
              </div>
              
              <div class="col-xs-4 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="cart_3.html" class="bs-wizard-dot"></a>
              </div>  
            </div><!-- End bs-wizard --> 
          </div><!-- End sub_content -->
          </div><!-- End subheader -->
        </section><!-- End section -->
        <!-- End SubHeader -->

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

        <!-- Content -->
        <div class="container-fluid margin_60_35">
          <div class="row">
            <div class="col-md-3">
              
              <div class="box_style_2 hidden-xs info">
                <h4 class="nomargin_top">Delivery time <i class="icon_clock_alt pull-right"></i></h4>
                <p>
                  Lorem ipsum dolor sit amet, in pri partem essent. Qui debitis meliore ex, tollit debitis conclusionemque te eos.
                </p>
                <hr>
                <h4>Secure payment <i class="icon_creditcard pull-right"></i></h4>
                <p>
                  Lorem ipsum dolor sit amet, in pri partem essent. Qui debitis meliore ex, tollit debitis conclusionemque te eos.
                </p>
              </div><!-- End box_style_1 -->
              
              <div class="box_style_2 hidden-xs" id="help">
                <i class="icon_lifesaver"></i>
                <h4>Need <span>Help?</span></h4>
                <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                <small>Monday to Friday 9.00am - 7.30pm</small>
              </div>
              
            </div><!-- End col-md-3 -->
            
            <div class="col-md-6">
              <div class="box_style_2" id="order_process">
                <h2 class="inner">Your order details</h2>

                <?php if($mode=='dinein') include("dinein-form.php"); ?>
                <?php if($mode=='delivery') include("delivery-form.php"); ?>

                
              </div><!-- End box_style_1 -->
            </div><!-- End col-md-6 -->
            
            <div class="col-md-3" id="sidebar">
              <div class="theiaStickySidebar" id="detailedcart">
                
              </div><!-- End theiaStickySidebar -->
            </div><!-- End col-md-3 -->
            
          </div><!-- End row -->
        </div><!-- End container -->
        <!-- End Content -->

        <!-- Footer -->
        <?php include "partials/footer.php"; ?>
        <!-- End Footer  -->

        <div class="layer"></div><!-- Mobile menu overlay mask -->

        <?php include "partials/modals.php"; ?>

        <!-- COMMON SCRIPTS -->
        <?php include "partials/scripts.php"; ?>


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

        <!-- SPECIFIC SCRIPTS -->
        <script src="js/theia-sticky-sidebar.js"></script>
        <script>
          jQuery('#sidebar').theiaStickySidebar({
            additionalMarginTop: 80
          });
          function addtocart(id)
          {
            $("body").css({ opacity:0.1});
            $.get( "addtocart.php?itemid="+id)
            .done(function(data) {
              $("#detailedcart").load('detailedcart.php?mode=<?=$_GET['mode']?>');
              alertify.success(data);
              $("body").css({ opacity:1});
            })
            .fail(function() {
              $("body").css({ opacity:1});
              alert( "Failed to add to cart. Please try again." );
            });

          }

          function removeitem(itemid, rm)
          {
            $("body").css({ opacity:0.2});
            $.get("removefromcart.php?itemid="+itemid+"&remove="+rm)
            .done(function(data){
              if(data == 1){
                $("#ritem").attr("disabled",true);
              }
              else{
                alertify.success(data);
                $("#detailedcart").load('detailedcart.php?mode=<?=$_GET['mode']?>');
              }
              $("body").css({ opacity:1});
              
            }).fail(function(){
              $("body").css({ opacity:1});
              alertify.success(data);
            });
            if(rm==1){
              window.location.reload();
            }
          }

          $(document).ready(function(){
            $("#detailedcart").load('detailedcart.php?mode=<?=$_GET['mode']?>');
          });
        </script>

</body>
</html>