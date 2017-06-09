<?php
error_reporting(0);
session_start();
include "database/db_conection.php";
if(!isset($_SESSION['user']))
{
	header('Location:myorders.php');
}
else{
$user_email = $_SESSION['user'];
if( isset($_SESSION['order_id']) )
{
    $order_id = $_SESSION['order_id'];
	unset($_SESSION['order_id']);
	
}
else if(isset($_GET['order_id']))
{ 
    $order_id = $_GET['order_id'];
// 	echo $order_id;
}
else
{
	header('LOCATION:myorders.php');
}

if(!empty($order_id))
{
    // var_dump($order_id);
	function get_string_between($string, $start, $end){
	    $string = ' ' . $string;
	    $ini = strpos($string, $start);
	    if ($ini == 0) return '';
	    $ini += strlen($start);
	    $len = strpos($string, $end, $ini) - $ini;
	    return substr($string, $ini, $len);
	}

	$email = $_SESSION['user'];

	$sql = "SELECT * FROM orders WHERE order_id='$order_id' AND user_email='$email'";
	$results = $dbcon->query($sql);
	if($results->num_rows==0)
	{
		$_SESSION['error'] = "No such order available";
		header('Location:myorders.php');
	}
	$rrows = array();
	while($row = $results->fetch_assoc())
	{
		$rrows['order_id'] = $row['order_id'];
		$rrows['rest_id'] = $row['rest_id'];
		$rrows['first_name'] = $row['first_name'];
		$rrows['last_name'] = $row['last_name'];
		$rrows['mobile'] = $row['mobile'];
		$rrows['email'] = $row['email'];
		$rrows['address'] = $row['address'];
		$rrows['city'] = $row['city'];
		$rrows['pincode'] = $row['pincode'];
		$rrows['dinein'] = $row['dinein'];
		$rrows['people'] = $row['people'];
		$rrows['date'] = $row['date'];
		$rrows['time'] = $row['time'];
		$rrows['status'] = $row['status'];
		$items = json_decode($row['items']);
	}
    $fullname = $rrows['first_name'].' '.$rrows['last_name'];
	if($rrows['status']!=0)
	{
		header('Location:myorders.php?order_id='.$order_id);
	}

	$oitems = array();

	foreach ($items as $key => $item) 
	{
		$oitems[$key]['quantity'] = $item[0];
		$oitems[$key]['name'] = preg_replace('/(?<!\ )[A-Z]/', ' $0', get_string_between($item,'x','Rs.'));
		$oitems[$key]['price'] = explode('Rs.', $item)[1];
		$oitems[$key]['subtot'] = $item[0] * explode('Rs.', $item)[1];
	}
}

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
              
              <div class="col-xs-4 bs-wizard-step active">
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
		<div class="container margin_60_35">
			<form method="post" name="customerData" action="http://dailydukaan.com/foods/ccavRequestHandler.php" >
				<input type="hidden" name="order_id" value="<?=$rrows['order_id']?>"/>
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
							<h2 class="inner">Payment methods</h2>
							<div class="payment_select">
								<label><input type="radio" value="" checked name="payment_method" class="icheck">Debit Card/ Credit Card (CCAVENUE)</label>
								<i class="icon_creditcard"></i>
							</div>

							<div class="form-group">
								<label>Billing Name</label>
								<input type="text" class="form-control" id="billing_name" name="billing_name" placeholder="First and last name" required="" value="<?=$fullname?>">
							</div>
							<div class="form-group">
								<label>Billing Address</label>
								<input type="text" class="form-control" id="billing_address" name="billing_address" placeholder="Billing Address" required="" <?php if(!empty($rrows['address'])) {
										echo "value=".$rrows['address'];
									} ?>>
							</div>
							<div class="form-group">
								<label>Billing City</label>
								<input type="text" class="form-control" id="billing_city" name="billing_city" placeholder="Billing City" required=""  <?php if(!empty($rrows['city'])) {
										echo "value=".$rrows['city'];
									} ?>>
							</div>

							<div class="form-group">
								<label>Billing State</label>
								<input type="text" class="form-control" id="billing_state" name="billing_state" placeholder="Billing State" required>
							</div>
							<div class="form-group">
								<label>Billing Zip</label>
								<input type="text" class="form-control" id="billing_zip" name="billing_zip" placeholder="Billing Zip" required="" <?php if(!empty($rrows['pincode'])) {
										echo "value=".$rrows['pincode'];
									} ?>>
							</div>
							<div class="form-group">
								<label>Billing Country</label>
								<input type="text" class="form-control" id="billing_country" name="billing_country" placeholder="Billing Country" value="INDIA">
							</div>
							<div class="form-group">
								<label>Billing Email</label>
								<input type="text" class="form-control" id="billing_email" name="billing_email" placeholder="Billing Email" value="<?=$rrows['email']?>">
							</div>
							<div class="form-group">
								<label>Billing Telephone/ Mobile</label>
								<input type="text" class="form-control" id="billing_tel" name="billing_tel" placeholder="Billing Telephone/ Mobile" value="<?=$rrows['mobile']?>">
							</div>

						</div><!-- End box_style_1 -->
					</div><!-- End col-md-6 -->
		            
					<div class="col-md-3" id="sidebar">
		            	<div class="theiaStickySidebar">
						<div id="cart_box">
							<h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
							<table class="table table_summary">
							<tbody>
							<?php

							$total = 0;
							foreach($oitems as $oitem){

								$total += $oitem['subtot'];
							?>
							<tr>
								<td>
									<a href="javascript:void(0)" class="remove_item"><i class="icon_minus_alt"></i></a> <strong><?=$oitem['quantity']?> x</strong> <?=$oitem['name']?>
								</td>
								<td>
									<strong class="pull-right">₹<?=$oitem['price']?></strong>
								</td>
							</tr>
							<?php
								$ototal = $total+$delivery;
							}
								
							?>
							

							</tbody>
							</table>
							<hr>

							<input type="hidden" name="redirect_url" value="http://foods.dailydukaan.com/ccavResponseHandler.php"/>

							<input type="hidden" name="cancel_url" value="http://foods.dailydukaan.com/ccavResponseHandler.php"/>
							<div class="row" id="options_2">
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
									<label>
									<input type="radio" value=""
									<?php if($dinein == 0)
									 echo "checked";
									 else
									 	echo "disabled";
									 ?> name="option_2" class="icheck">Delivery
									</label>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
									<label><input type="radio" value="" name="option_2" <?php if($dinein == 1)
									 echo "checked";
									 else
									 	echo "disabled";
									 ?> class="icheck">Dine In</label>
								</div>
							</div><!-- Edn options 2 -->
							<hr>
							<input type="hidden" name="merchant_id" value="132894"/>
							<input type="hidden" name="currency" value="INR"/>
							
							<table class="table table_summary">
							<tbody>
							<tr>
								<td>
									 Subtotal <span class="pull-right">₹<?=$total?></span>
								</td>
							</tr>
							<tr>
								<td>
									 Delivery fee <span class="pull-right">₹10</span>
								</td>
							</tr>
							<tr>
								<td class="total">
									 TOTAL <span class="pull-right">₹<?=$ototal?></span>
								</td>
							</tr>
							</tbody>
							</table>
							<hr>
							<!-- <a class="btn_full" href="#">Confirm your order</a> -->
							<input type="submit" name="submit" value="Confirm your order" class="btn_full">
							<a class="btn_full" href="myorders.php"><i class="arrow_triangle-left"></i>Cancel Order</a>
						</div><!-- End cart_box -->
		                </div><!-- End theiaStickySidebar -->
					</div><!-- End col-md-3 -->
		            <input type="hidden" name="amount" value="<?=$ototal?>"/>
				</div><!-- End row -->
			</form>
		</div><!-- End container -->





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
         
        </script>

</body>
</html>
<?php
}
?>