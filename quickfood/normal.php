<?php
error_reporting(0);
session_start();
include "database/db_conection.php";
?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<?php
 include "partials/head.php";
?>

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
              <div class="col-xs-4 bs-wizard-step">
                <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="#0" class="bs-wizard-dot"></a>
              </div>
              
              <div class="col-xs-4 bs-wizard-step">
                <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="#" class="bs-wizard-dot"></a>
              </div>
              
              <div class="col-xs-4 bs-wizard-step active">
                <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="#" class="bs-wizard-dot"></a>
              </div>  
            </div><!-- End bs-wizard --> 
          </div><!-- End sub_content -->
          </div><!-- End subheader -->
        </section><!-- End section -->

         <div id="position">
          <div class="container">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li>My Orders</li>
            </ul>
            <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
          </div>
        </div><!-- Position -->
		<div class="container margin_60_35">
				<div class="row">
					<div class="col-md-3">
						<div class="box_style_2 hidden-xs info">
							<h4 class="nomargin_top">Delivery time <i class="icon_clock_alt pull-right"></i></h4>
							<p>
								#
							</p>
							<hr>
							<h4>Secure payment <i class="icon_creditcard pull-right"></i></h4>
							<p>
								#
							</p>
						</div><!-- End box_style_2 -->
		                
						<div class="box_style_2 hidden-xs" id="help">
							<i class="icon_lifesaver"></i>
							<h4>Need <span>Help?</span></h4>
							<a href="tel://<?=$phnnum?>" class="phone"><?=$phnnum?></a>
							<small><?=$timings?></small>
						</div>
					</div><!-- End col-md-3 -->

          <div class="col-md-6">
            <div class="box_style_2">
              <h2 class="inner">


              <img src="img/icon_close.ico" width="50" height="50">


               Order Status : Pending</h2>
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Property</th>
                      <th>Value</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Mark</td>
                      <td>Otto</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>

            </div><!-- End box_style_1 -->
          </div><!-- End col-md-6 -->
          <div class="col-md-3" id="sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
              <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static;">
              <div id="cart_box">
                <h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
                <table class="table table_summary">
                <tbody>
                <tr>
                  <td>
                    <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>1x</strong> Enchiladas
                  </td>
                  <td>
                    <strong class="pull-right">$11</strong>
                  </td>
                </tr>
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
                    <label><div class="iradio_square-grey checked" style="position: relative;"><input type="radio" value="" checked="" name="option_2" class="icheck" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>Delivery</label>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <label><div class="iradio_square-grey" style="position: relative;"><input type="radio" value="" name="option_2" class="icheck" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>Take Away</label>
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
                <a class="btn_full" href="cart_3.html">Confirm your order</a>
              </div><!-- End cart_box -->
                      </div><!-- End theiaStickySidebar -->
            </div>



          </div>


          </div>




        <!-- Footer -->
        <?php include "partials/footer.php"; ?>
        <!-- End Footer  -->

        <div class="layer"></div><!-- Mobile menu overlay mask -->

        <?php include "partials/modals.php"; ?>

        <!-- COMMON SCRIPTS -->
        <?php include "partials/scripts.php"; ?>


        <!-- Search Menu -->
        <!-- <div class="search-overlay-menu">
          <span class="search-overlay-close"><i class="icon_close"></i></span>
          <form role="search" id="searchform" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="icon-search-6"></i>
            </button>
          </form>
        </div> -->
        <!-- End Search Menu -->

        <!-- SPECIFIC SCRIPTS -->
        <script src="js/theia-sticky-sidebar.js"></script>
        <script>
          jQuery('#sidebar').theiaStickySidebar({
            additionalMarginTop: 80
          });
         
        </script>

</body>
</html>