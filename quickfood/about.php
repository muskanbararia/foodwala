<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
        <?php include "partials/head.php"; ?>

<body>
        <?php include "partials/preloader.php"; ?>
        
        <!-- Header  -->
        <?php include "partials/header.php"; ?>
        <!-- End Header -->

        <!-- SubHeader == -->
        <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
            <div id="subheader">
               <div id="sub_content">
                  <h1>About us</h1>

                  <p></p>
              </div><!-- End sub_content -->
          </div><!-- End subheader -->
        </section><!-- End section -->
        <!-- End SubHeader  -->

        <!-- Position -->

        <!-- Container -->
        <div class="container margin_60_35">
         <!-- End row -->
          <hr class="more_margin">
          <div class="main_title">
            <h2 class="nomargin_top">Daily dukaan quality feautures</h2>
            <p>
                Here is what we have done:
            </p>
          </div>
          <div class="row">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
               <div class="feature">
                  <i class="icon_building"></i>
                  <h3><span>+ 1000</span> Restaurants</h3>
                  <p>
                    Our team gathers information from every restaurant on a regular basis to ensure our data is fresh. Our vast community of food lovers share their reviews and photos, so you have all that you need to make an informed choice.
                </p>
              </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
              <div class="feature">
                  <i class="icon_documents_alt"></i>
                  <h3><span>+1000</span> Food Menu</h3>
                  <p>With dedicated engagement and management tools, we're enabling restaurants to spend more time focusing on food itself, which translates directly to better dining experiences.
                  </p>
              </div>
            </div>
          </div><!-- End row -->
          <div class="row">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature">
                  <i class="icon_bag_alt"></i>
                  <h3><span>Delivery</span> or Takeaway</h3>
                  <p>
                    Your products will be home-delivered
                    as per your order.
                  </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
              <div class="feature">
                  <i class="icon_mobile"></i>
                  <h3><span>Mobile</span> support</h3>
                  <p>
                    Our Dedicated team offers 24*7 support to all our customers.
                </p>
              </div>
            </div>
          </div><!-- End row -->
        </div>
        <!-- End container -->

        <div class="container-fluid">
        	<div class="row">
        		<div class="col-md-6 nopadding features-intro-img">
        			<div class="features-bg">
        				<div class="features-img">
        				</div>
        			</div>
        		</div>
        		<div class="col-md-6 nopadding">
        			<div class="features-content">
        				<h3>"Great offers"</h3>
        				<p>
        					
                            Our daily deals will help you get free delivery or a nice discount from your favorite restaurant. That might help you decide for discovering new incredible restaurants, dishes, cuisines or even to save space on your freezer. Who knows, finding a new love for food might be easier than you thought.
                        </p>
                        <p>
                            Stay tuned to our latest events and news by signing up for our newsletter and make sure to share them with your family and friends. We recommend you to follow us on Facebook, Twitter, Instagram or our Magazine to ensure you won’t miss any opportunity to enjoy food at a good price.


                        </p>
                    </div>
                </div>
            </div>
        </div><!-- End container-fluid  -->

        <!-- Footer  -->
        <?php include "partials/footer.php"; ?>
        <!-- End Footer -->

        <div class="layer"></div><!-- Mobile menu overlay mask -->

        <?php include "partials/modals.php"; ?>

        <!-- COMMON SCRIPTS -->
        <?php include "partials/scripts.php"; ?>

        <!-- SPECIFIC SCRIPTS -->
        <script src="js/morphext.min.js"></script>
        <script>
            $("#js-rotating").Morphext({
            animation: "fadeIn", // Overrides default "bounceIn"
            separator: ",", // Overrides default ","
            speed: 2300, // Overrides default 2000
            complete: function () {
                // Overrides default empty function
            }
        });
        </script>

</body>
</html>