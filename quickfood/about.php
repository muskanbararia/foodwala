<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
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

    <!-- Header ===== -->
    <?php include "header.php"; ?>
    <!-- End Header == -->
    
    <!-- End Header == -->

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

  <!-- Content ===== -->
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
<!-- End row -->
</div><!-- End container -->

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
<!-- End Content == -->

<!-- Footer ===== -->
<?php include("footer.php"); ?>
<!-- End Footer == -->

<div class="layer"></div><!-- Mobile menu overlay mask -->

<?php include "modals.php"; ?>

<!-- COMMON SCRIPTS -->
<?php include "scripts.php"; ?>

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
<?php

// include("../database/db_conection.php");      
if(isset($_POST['login-submit']))  
{  
    $email=($_POST['name']);  
    $password=($_POST['password']);  
    $check_user="select * from user WHERE email='$email' AND password='$password'";


    $run= $dbcon->query($check_user);  
    $data = $run->fetch_assoc();

    if($run->num_rows)  
    {  
        $_SESSION['user']=$email;
        echo "<script>window.open('./index.php','_self')</script>";  

    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";

      echo "<script>window.open('./index.php','_self')</script>";       
  }  
}
if(isset($_POST['signin-submit']))  
{  
                        //here getting result from the post array after submitting the form.
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['mobile'];
    $pwd=$_POST['password'];
    $address=$_POST['address'];


                    //here query check if package already registered so can't register again.  
    $check_if_package="select * from user WHERE email='$email'";
    $run_query=$dbcon->query($check_if_package);  

    if($run_query->num_rows>0)  
    {  
        echo "<script>alert('User already exists')</script>";  
        exit();  
    }


    $insert_package="insert into user (name, email, mobile, address,password) VALUE ('$name','$email','$phone','$address','$pwd')";  


    if($dbcon->query($insert_package))  
    {  
        echo"<script>alert('Registered successfully')</script>";
        $_SESSION['user']=$email;
        echo"<script>window.open('./index.php','_self')</script>";
    }     
}
?>