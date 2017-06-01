<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<html>
<?php include "head.php"; ?>

<body>

  <!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->

    <?php include "preloader.php"; ?>
    <!-- End Preload -->

    <!-- Header ===-->
    <?php include "header.php"; ?>
    <!-- End Header -->

    <!-- SubHeader -->
    <section class="parallax-window" id="short"  data-parallax="scroll" data-image-src="img/sub_header_short.jpg" data-natural-width="1400" data-natural-height="350">
      <div id="subheader">
       <div id="sub_content">
        <h1>Frequently asked questions</h1>

      </div><!-- End sub_content -->
    </div><!-- End subheader -->
  </section><!-- End section -->
  <!-- End SubHeader  -->

  <!-- Position -->

  <!-- Content ===-->
  <div class="container margin_60_35">
   <div class="row">

    <div class="col-md-3" id="sidebar">
      <div class="theiaStickySidebar">
        <div class="box_style_1" id="faq_box">
         <ul id="cat_nav">
          <li><a href="#payment" class="active">Top Questions</a></li>
          <li><a href="#works">Ordering</a></li>
          <li><a href="#delay">Delivery delay</a></li>
          <li><a href="#takeaway"> How it works</a></li>

        </ul>
      </div><!-- End box_style_1 -->
    </div><!-- End theiaStickySidebar -->
  </div><!-- End col-md-3 -->

  <div class="col-md-9">
    <h3 class="nomargin_top">Top Questions</h3>

    <div class="panel-group" id="payment">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#payment" href="#collapseOne">Where is my order? <i class="indicator icon_plus_alt2 pull-right"></i></a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
          <div class="panel-body">
            After you place your order, we send it directly to the restaurant, which starts preparing it immediately.<br>

            Our restaurants do everything they can to get your food delivered as quickly as possible. However, sometimes restaurants receive very large amount of orders, or drivers get stuck in heavy traffic - this unfortunately might cause delays.<br>

            If the amount of time you’ve waited has exceeded the estimated delivery time, you can contact us and we’ll look into what’s going on.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#payment" href="#collapseTwo">I have a voucher code. How can I use it? <i class="indicator icon_plus_alt2 pull-right"></i></a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
          <div class="panel-body">
            If you have a voucher code, you can redeem it after selecting a restaurant and adding items to your basket. You will see a field to enter your voucher code on the order overview page. If the voucher is valid, the discount on your order will be calculated immediately. Only one voucher can be used per order.<br>

            If your voucher code does not work, feel free to contact us and we’ll take a look.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#payment" href="#collapseThree">Are there any discounts available right now?<i class="indicator icon_plus_alt2 pull-right"></i></a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
          <div class="panel-body">
            we offer many different discounts at restaurants. 
          </div>
        </div>
      </div>
    </div><!-- End panel-group -->

    <h3>Ordering</h3>

    <div class="panel-group" id="works">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#works" href="#collapseOne_works">How to order online ? <i class="indicator icon_plus_alt2 pull-right"></i></a>
          </h4>
        </div>
        <div id="collapseOne_works" class="panel-collapse collapse">
          <div class="panel-body">
            It is really easy, as easy as 1, 2, 3:<br>

            1. Tell us where you are: Enter your location so that we can show you which restaurants deliver to you.<br>
            2. Choose what you would like: Pick a restaurant and select items you’d like to order. You can search by restaurant name, cuisine type, dish name or by keyword.<br>
            3. Checkout: Enter your exact delivery address, payment method and your phone number. Always make sure that you enter the correct phone number to help us contact you regarding your order, if needed.<br>

            Now sit back, relax, and we’ll get your food delivered to your doorstep.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#works" href="#collapseTwo_works">Do I have to create an account to place an order?<i class="indicator icon_plus_alt2 pull-right"></i></a>
          </h4>
        </div>
        <div id="collapseTwo_works" class="panel-collapse collapse">
          <div class="panel-body">
            Yes.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#works" href="#collapseThree_works">How long does it take for my order to get delivered? <i class="indicator icon_plus_alt2 pull-right"></i></a>
          </h4>
        </div>
        <div id="collapseThree_works" class="panel-collapse collapse">
          <div class="panel-body">
            Delivery time varies from restaurant to restaurant. It also depends on the number of orders that the restaurant has to prepare and on the distance between the restaurant and your delivery address.<br>

            You can see the estimated delivery time for each restaurant in your area on our website. After placing an order, a more precise delivery time will be communicated to you by SMS.
          </div>
        </div>
      </div>
    </div><!-- End panel-group -->

    <h3>Delivery delay</h3>

    <div class="panel-group" id="delay">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#delay" href="#collapseOne_delay">What are the delivery costs? <i class="indicator icon_plus_alt2 pull-right"></i></a>
          </h4>
        </div>
        <div id="collapseOne_delay" class="panel-collapse collapse">
          <div class="panel-body">
            Delivery costs, just like delivery time, are determined by restaurants individually. Usually the ones closest to you will charge a small delivery fee. If a delivery driver has to travel a long way, they may charge a little extra for the service. There are many restaurants offering free delivery as well. You can easily check the delivery cost for each restaurant whilst browsing our website.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#delay" href="#collapseTwo_delay">How can I pay for my order? <i class="indicator icon_plus_alt2 pull-right"></i></a>
          </h4>
        </div>
        <div id="collapseTwo_delay" class="panel-collapse collapse">
          <div class="panel-body">
           All our restaurants accept cash on delivery. In addition, there are various online payment methods available. You can check which payment methods are accepted at each restaurant by going to the ‘Info’ tab on the restaurant’s page.<br>

           Cash on Delivery<br>

           Select ‘Cash on Delivery’ on the checkout page and pay the driver at your doorstep when you receive your order.<br>

           Credit Card<br>

           Select ‘Credit Card’ on the checkout page. After placing your order you will be redirected to the secure payment page of our payment partner, where you can follow the instructions. Once the payment is confirmed, the order will be transmitted to the restaurant.<br>

           Online Banking<br>

           Select ‘Online Banking’ and your bank on the checkout page. After placing your order you will be redirected to the secure payment page of our payment partner, where you can follow the instructions. Once the payment is confirmed, the order will be transmitted to the restaurant.<br>
         </div>
       </div>
     </div>
     <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#delay" href="#collapseThree_delay">Why is ordering online better than ordering by phone? <i class="indicator icon_plus_alt2 pull-right"></i></a>
        </h4>
      </div>
      <div id="collapseThree_delay" class="panel-collapse collapse">
        <div class="panel-body">
          Online ordering at foodpanda provides several advantages over telephone ordering.<br>

          1. Discover: We offer a huge choice of restaurants, and we have their menus online so you don’t have to collect menus for individual restaurants or stick to just one of them. Every day you can discover new restaurants and new tastes.<br>
          2. Take your time: You have as much time as you need to decide what to eat today, instead of listening to someone read out the entire menu to you and making a decision on the spot.<br>
          3. Know what you’re getting: We help you make the right choice by providing customer reviews and ratings.<br>
          4. Convenient payment: If you order at foodpanda.in, you’re not limited to paying by cash on delivery. You can easily and safely pay online using online banking or your credit card.<br>
          5. You can view details of all your past orders and easily re-order.<br>
        </div>
      </div>
    </div>
  </div><!-- End panel-group -->

  <h3> How it works</h3>

  <div class="panel-group" id="takeaway">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#takeaway" href="#collapseOne_takeaway">How can I see all restaurants? <i class="indicator icon_plus_alt2 pull-right"></i></a>
        </h4>
      </div>
      <div id="collapseOne_takeaway" class="panel-collapse collapse">
        <div class="panel-body">
          If you want to view all restaurants, just go to Restaurant List. Then enter your location to check which restaurants can deliver to you.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#takeaway" href="#collapseTwo_takeaway">What are your opening hours? <i class="indicator icon_plus_alt2 pull-right"></i></a>
        </h4>
      </div>
      <div id="collapseTwo_takeaway" class="panel-collapse collapse">
        <div class="panel-body">
          we are available 24/7 to serve you.<br>

          During closing hours you can browse through restaurants and place an order for later.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#takeaway" href="#collapseThree_takeaway">Why am I getting a message that a restaurant does not deliver to me? <i class="indicator icon_plus_alt2 pull-right"></i></a>
        </h4>
      </div>
      <div id="collapseThree_takeaway" class="panel-collapse collapse">
        <div class="panel-body">
         The delivery area depends on individual restaurants and we have no influence on this. If you enter your delivery address on the homepage, then you can browse through all the restaurants that can deliver to you.
       </div>
     </div>
   </div>
 </div><!-- End panel-group -->

 <!-- End panel-group -->

 <!-- End panel-group -->

 <!-- End panel-group -->

 <!-- End panel-group -->

</div><!-- End col-md-9 -->
</div><!-- End row -->
</div><!-- End container -->
<!-- End Content -->

<!-- Footer ===-->
<?php include("footer.php"); ?>
<!-- End Footer -->

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